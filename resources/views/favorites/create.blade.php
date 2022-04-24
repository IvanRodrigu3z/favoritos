@extends('favorites.list')
@section('title', 'crear')
@section('form')
<div class="form-create">
    <h2>Crear favorito</h2>
    <form action="{{route('favorite.save')}}" method="POST">
        @csrf
        <div>
            <input class="input-form-fav" type="text" name="title" placeholder="Titulo">
        </div>
        <div>
            <input class="input-form-fav" type="text" name="url" placeholder="Url">
        </div>
        <div>
            <textarea name="description" id="" cols="30" rows="10" class="textarea-form-fav" placeholder="Descripción"></textarea>
        </div>
        <div>
            <label for="category">Categoria</label>
            <select name="category" id="" class="select-form">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="visibility">Visibilidad</label>
            <select name="visibility" id="" class="select-form">
                <option value="public">Publico</option>
                <option value="private">Privado</option>
            </select>
        </div>
        <button type="submit" class="btn button-form-fav">Guardar</button>
    </form>
</div>
@endsection