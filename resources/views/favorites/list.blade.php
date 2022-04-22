@extends('favorites.home')
@section('title', 'Home')
@section('list-fav')

    <h3 class="title-list">Mis favoritos</h3>
    @foreach($favorites as $favorite)
    <div class="card">
        <span class="item">{{$favorite->title}}</span>
        <span class="item">{{$favorite->url}}</span>
        @if(auth()->check())
        <span class="item">
            <a href="{{route('favorite.edit', $favorite->id)}}" class="item action t-green">Detalle</a>
            <form action="{{route('favorite.delete', $favorite->id)}}" method="POST" class="item">
                @csrf
                @method('DELETE')
                <input type="submit" value="Eliminar" class="item action b-delete">
            </form>
        </span>
        @endif
    </div>
    @endforeach

    {{$favorites->links('vendor.pagination.simple')}}

@endsection