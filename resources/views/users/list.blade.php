@extends('layouts.app')
@section('title', 'listar')
@section('content')

<h1>listar usuarios</h1>

<form action="{{route('users.list')}}" method="POST">
    @csrf
    <label for="name">Nombre:
        <input name="name" type="text">
    </label> <br>
    <label for="email">Correo:
        <input name="email" type="text">
    </label><br>
    <label for="email">Contraseña:
        <input name="password" type="password">
    </label><br>
    <button type="submit">registrar</button>
</form>

@endsection