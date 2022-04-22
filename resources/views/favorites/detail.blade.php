@extends('favorites.home')
@section('title', 'editar')
@section('form-fav-detail')
<div class="form-create">
    <h2>Editar favorito</h2>
    <form action="{{route('favorite.save')}}" method="POST">
        @csrf
        <div>
            <input class="input-form-fav" type="text" name="url" value="{{$favorite->url}}">
        </div>
        <div>
            <input class="input-form-fav" type="text" name="title" value="{{$favorite->title}}">
        </div>
        <div>
            <textarea name="description" id="" cols="30" rows="10" class="textarea-form-fav" value="favorite->description"></textarea>
        </div>
        <div>
            <label for="category">Categoria</label>
            <!--  -->
        </div>
        <div>
            <label for="visibility">Visibilidad</label>
            <select name="visibility" class="select-form" value="{{$favorite->visibility}}">
                <option value="public">Publico</option>
                <option value="private">Privado</option>
            </select>
        </div>
        <button type="submit" class="btn button-form-fav">Guardar cambios</button>
    </form>
</div>
@endsection