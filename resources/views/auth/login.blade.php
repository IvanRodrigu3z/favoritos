@extends('layouts.app')
@section('title', 'Ingresar')
@section('content')

<div class="wraper">
    <div class="login login-text">
        <h2>Login</h2>
        <span>Bienvenido, ingrese su correo y contraseña para ingresar.</span>
    </div>
    <div class="login login-form">
        <form action="{{route('user.login')}}" method="POST">
            @csrf
            <div class="cont-input">
                <input class="input-form"  name="email" type="text" placeholder="Correo">
            </div>
            <div class="cont-input">
                <input class="input-form" name="password" type="password" placeholder="Contraseña">
            </div>
            @error('message')
            <p>cualquier error</p>
            @enderror
            <button type="submit" class="btn button-form">Ingresar</button>
        </form>
    </div>
</div>

@endsection