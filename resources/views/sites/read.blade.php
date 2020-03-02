@extends('home')
@section('inicio')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" style="height: 150px;">
        <div class="carousel-item active">
            <img class="d-block w-25" src="/storage/sites/jls.png">  
        </div>
        @foreach($sites as $site) 
        <div class="carousel-item">
            <img class="d-block w-100" src="/storage/sites/{{$site->img}}" alt="{{$site->titulo}}"> 
            <div class="carousel-caption d-none d-md-block bg-secondary m-t-0">
                <h5>{{$site->titulo}}</h5>
                <p>{{$site->descricao}}</p>
            </div>

        </div>
        @endforeach
    </div>




    <div class="row">
        @forelse($sites as $site) 
        <div class="card m-1">
            <div class="card-body">
                <div class="card" style="width: 12rem;"> 
                    <img class="card-img-top" src="/storage/sites/{{$site->img}}" alt="{{$site->titulo}}">  
                    <div class="card-body">
                        <h5 class="card-title">{{$site->titulo}}</h5>
                        <p class="card-text">{{$site->descricao}}</p>
                    </div>
                </div>
                <div class="">
                    <a href="{{$site->link}}" class="btn btn-outline-primary">Visitar</a>
                    <a href="/sites/{{$site->id}}/edit" class="btn btn-outline-info">Editar</a>
                    <form class="" method="post" action="/sites/{{$site->id}}">
                        @csrf
                        @method('DELETE')                    
                        <button type="submit" class="btn btn-outline-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>

        @empty
        <div class="alert alert-danger">
            Ops, nenhum site cadastrado!
        </div>
        @endforelse
    </div>
    @endsection
    <script type="text/javascript">

        $('.carousel').carousel()
    </script>