@extends('home')
@section('inicio')
<div class="card">
    <div class="card-header">
        <div class="card-title h5">
            @if(!$edit)
            Novo Site   
            @else
            Editar Site
            @endif
        </div>
    </div>
    <div class="card-body " style="width: 40rem;">
        @if(!$edit)
        <form action="/sites" method="post" enctype="multipart/form-data">
            @else
            <form action="/sites/{{$site->id}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @endif
                @csrf
                <div class="form-group">
                    <label for="titulo">Título do Site</label>
                    <input id="titulo" name="titulo" class="form-control" type="text" value="{{@$site->titulo}}" placeholder="">
                </div>
                <div class="form-group">
                    <label for="link">Link do site</label>
                    <input id="link" name="link" class="form-control" type="text" value="{{@$site->link}}" placeholder="">
                </div>
                <div class="form-group">
                    <label for="descricao">Descriçao do Site</label>
                    <textarea class="form-control" maxlength="200" name="descricao" id="descricao"  rows="3">{{@$site->descricao}}</textarea>
                </div>
                @if(!$edit)
                <div class="form-group">
                    <label for="foto">Exemplo de input de arquivo</label>
                    <input type="file" name="img"  class="form-control-file" id="foto">
                </div>
                @endif
                <input class="btn btn-success btn-sm right" type="submit" value="Salvar"/>
            </form>

    </div>
    <img class="card-img-top"   style="width: 30rem;" src="/storage/sites/{{@$site->img}}" alt="{{@$site->titulo}}">  

</div>


@endsection