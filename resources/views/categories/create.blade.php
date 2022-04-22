@extends('categories.home')
@section('title', 'Home')
@section('form-cat')
<div class="fav-form">
    <div class="form-create">
        <h2>Crear Categoria</h2>
        @if(Session::has('success'))
        <br><span class="success-msj">{{Session::get('success')}}</span>
        @endif
        <form action="{{route('category.save')}}" method="POST">
            @csrf
            <div>
                @error('name')
                <br><span class="error-msj">{{$message}}</span>
                @enderror
                <input class="input-form-fav" type="text" name="name" placeholder="Nombre">
            </div>
            <button type="submit" class="btn button-form-fav">Guardar</button>
        </form>
    </div>
</div>
@endsection