<?php

namespace jls\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use jls\Http\Requests;
use jls\Http\Controllers\Controller;

class ImagemController extends Controller {

    function getImagemFile($nome) {
        $imagem = Storage::disk('public')->get($nome);
        return response($imagem, 200)->header('Content-Type', 'image/jpeg');
    }

    public function upload($request) {
        $nameFile = null;

        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('img') && $request->file('img')->isValid()) {

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $request->img->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            // Faz o upload:
            $upload = $request->img->storeAs('/public/sites', $nameFile);
            
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/sites/nomedinamicoarquivo.extensao
            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if (!$upload){
                return false;
                
            }
            return $nameFile;
        }
    }

}
