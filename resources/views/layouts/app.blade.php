<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Favoritos app</title>
    <!-- estilos css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- estilos de fuente -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    
    <!-- fuente de iconos -->
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}" />
    <link rel="stylesheet" href="{{asset('fontawesome/webfonts')}}" />
</head>
<body>

    <header class="">
        <nav class="menu">
            <div class="logo">
                <a href="{{url('/')}}">Favoritos app</a>
            </div>
            <ul>
                @if(auth()->check())
                <li class="saludo">Bienbenido {{ auth()->user()->name }}</li>
                <li><a class="logout" href="{{url('/salir')}}">Cerrar sesion</a></li>
                @else
                <li><a href="{{url('/')}}">inicio</a></li>
                <li><a href="{{url('/usuario/registro')}}">registrar</a></li>
                <li><a href="{{url('ingresar')}}">Ingresar</a></li>
                @endif
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        todos los derechos reservados
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{asset('js/dinamic.js')}}"></script>
    
</body>
</html>