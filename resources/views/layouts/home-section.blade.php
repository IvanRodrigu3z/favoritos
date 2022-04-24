@extends('home')
@section('title-section', 'Home')
@section('content-fav')
<div id="favorites">
    <div class="wraper-fav">
        <div class="form-fav">
            <a href="{{url('favorito/crear')}}" class="btn button-form-fav btn-show-form" hidden> 
                Nuevo @yield('section-title')
            </a>
            <div class="fav-form">
               @yield('form')
            </div>
        </div>
        <div class="home-fav">
        @yield('list-fav')
        </div>
    </div>
</div>
@endsection