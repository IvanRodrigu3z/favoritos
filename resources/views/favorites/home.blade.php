@extends('home')
@section('title', 'Home')
@section('content-fav')
<div id="favorites">
    <div class="wraper-fav">
        <div class="form-fav">
            <a href="{{url('favorito/crear')}}" class="btn button-form-fav btn-show-form" hidden> Nuevo Favorito</a>
            <div class="fav-form">
                @yield('form-fav')
                @yield('form-fav-detail')
            </div>
        </div>
        <div class="home-fav">
        @yield('list-fav')
        </div>
    </div>
</div>
@endsection