@extends('layouts.home-section')
@section('section-title', 'favorito')
@section('list-fav')
@foreach($favorites as $favorite)
<div class="card lado">
    <div class="bg-no item">
        <p class="label-item bg-no">nombre</p>
        <p class="value bg-no">{{$favorite->title}}</p>
    </div>
    <div class="bg-no item">
        <p class="label-item bg-no">url</p>
        <p class="value bg-no">{{$favorite->url}}</p>
    </div>
    @if(auth()->check())
    <div class="bg-no t-center">
        <a href="{{route('favorite.edit', $favorite->id)}}" class="bg-no action t-green">Detalle</a>
        <form action="{{route('favorite.delete', $favorite->id)}}" method="POST" class="bg-no">
            @csrf
            @method('DELETE')
            <input type="submit" value="Eliminar" class="bg-no action b-delete">
        </form>
    </div>
    @endif
</div>

{{$favorites->links('vendor.pagination.simple')}}

@endforeach
