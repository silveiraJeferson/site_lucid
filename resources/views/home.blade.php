@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="/home">Início</a></li>
                <li class="list-group-item"><a href="/sites/create">Adicionar Site</a></li>
                <li class="list-group-item"><a href="/users">Usuários</a></li>
                <li class="list-group-item"><a href="/users/create">Novo Usuário</a></li>
               
            </ul>
        </div>
        
        
        <div class="col-10">
            @yield('inicio')
            
        </div>
        
    </div>

</div>
@endsection
