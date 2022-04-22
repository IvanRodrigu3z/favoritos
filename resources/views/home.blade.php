@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="content">
    @if(auth()->check())
    <div class="tabs">
        <ul>
            <li><a href="{{url('/inicio/favorito')}}" id="favorite-tab">Favoritos</a></li>
            <li><a href="{{url('/inicio/categoria')}}" id="category-tab">Categorias</a></li>
            <hr>
            <br>
        </ul>
        @yield('content-fav')
    </div>
    <div id="categories">

    </div>
    @else
    <p>listado de usuarios con sus favoritos añadidos recientemente</p>
    <div class="home">
        <h3 class="title-list">Usuarios</h3>
        <div class="content-card">
            <div class="user-card">
                @foreach($users as $user)
                <div class="card">
                    <span class="item">{{$user->name}}</span>
                    <a href="{{route('list.favorite.user', $user->id)}}" class="item action t-green">Ver favoritos</a>
                </div>
                @endforeach
            </div>
            <div class="fav-card">
                @yield('list-fav')
            </div>
        </div>
    </div>
    @endif
</div>



@endsection