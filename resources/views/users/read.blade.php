@extends('home')
@section('inicio')
@foreach($users as $user)
<p>{{$user->name}}</p>
@endforeach
@endsection