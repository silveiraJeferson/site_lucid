<?php

namespace jls\Http\Controllers;

use Illuminate\Http\Request;
use jls\Site;
use jls\Http\Controllers\ImagemController;

class SiteController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $sites = Site::all();
        return view('sites.read', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $edit = false;
        return view('sites.create', compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ImagemController $img) {
        $site = new Site($request->all());
        $upload = $img->upload($request);
        if (!$upload) {
            return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer upload')
                            ->withInput();
        }
        $site->img = $upload;
        $site->link = "http://$request->link";
        $site->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site) {
        $edit = true;
        return view('sites.create', compact('edit', 'site'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        Site::where('id', $id)
                ->update([
                    'titulo' => $request->titulo,
                    'descricao' => $request->descricao,
                    'link' => $request->link
        ]);
      
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Site::destroy($id);

        return redirect('/home');
    }

}
