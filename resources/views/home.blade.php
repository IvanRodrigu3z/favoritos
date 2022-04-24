@extends('layouts.app')
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
    @else

    <div class="btn-back">
        <a href="{{url('/atras')}}">Volver</a>
    </div>

    <div class="home">
        <div class="title-list">
            <h3 class="bg-no">@yield('title-list')</h3>
        </div>

        @yield('list')

    </div>

    @endif
</div>
@endsection