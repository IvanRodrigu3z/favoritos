@extends('home')
@section('title', 'Usuarios')
@section('title-list', 'Usuarios')
@section('list')

@foreach($users as $user)
<div class="card between">
    <div class="bg-no item">
        <p class="label-item bg-no">nombre</p>
        <p class="value bg-no">{{$user->name}}</p>
    </div>
    <a href="{{route('list.favorite.user', $user->id)}}" class="bg-no action t-green">Ver favoritos</a>
</div>
@endforeach
<div class="fav-card">
    @yield('list-fav')
</div>

@endsection