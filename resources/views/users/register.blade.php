@extends('layouts.app')
@section('title', 'registrar')
@section('content')

<div class="wraper">
    <div>
        <h2>Crear usuario</h2>

        
        <form action="{{route('users.register')}}" method="POST">
            @csrf
            <div class="cont-input">
                <input class="input-register" name="name" type="text" placeholder="Nombre usuario" value="{{old('name')}}">
                @error('name') 
                <br><span class="error-msj">{{$message}}</span>
                @enderror
            </div>
            <div class="cont-input">
                <input class="input-register" name="email" type="text" placeholder="Correo" value="{{old('email')}}">
                @error('email') 
                <br><span class="error-msj">{{$message}}</span>
                @enderror
            </div class="cont-input">
            <div class="cont-input">
                <input class="input-register" name="password" type="password" placeholder="Contraseña">
                @error('password') 
                <br><span class="error-msj">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn button-register">registrar</button>
        </form>
    </div>
</div>

@endsection