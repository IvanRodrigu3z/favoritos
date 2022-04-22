@extends('categories.home')
@section('title', 'detalle')
@section('form-cat-detail')
<div class="fav-form">
    <div class="form-create">
        <h2>Editar categoria</h2>
        @if(Session::has('success'))
        <br><span class="success-msj">{{Session::get('success')}}</span>
        @endif
        <form action="{{route('category.save')}}" method="POST">
            @csrf
            <div>
                @error('name')
                <br><span class="error-msj">{{$message}}</span>
                @enderror
                <input class="input-form-fav" type="text" name="name" value="{$category->name}">
            </div>
            <button type="submit" class="btn button-form-fav">Guardar</button>
        </form>
    </div>
</div>
@endsection