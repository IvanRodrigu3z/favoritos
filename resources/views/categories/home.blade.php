@extends('home')
@section('title', 'Home')
@section('content-fav')
<div id="favorites">
    <div class="wraper-fav">
        <div class="form-fav">
            <a href="{{url('/categoria/crear')}}" class="btn button-form-fav btn-show-form">Crear categoria</a>
            @yield('form-cat')
            @yield('form-cat-detail')
            
        </div>
        <div class="home-cat">
            <h3 class="title-list">Categorias</h3>
            @foreach($categories as $category)
            <div class="card">
                <span class="item">{{$category->name}}</span>
                <span class="item">
                <a href="{{route('category.edit', $category->id)}}" class="item action t-green">Detalle</a>
                    <form action="{{route('category.delete', $category->id)}}" method="POST" class="item">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" class="item action b-delete">
                    </form>
                </span>
            </div>
            @endforeach
        </div>
    </div>
    @endsection