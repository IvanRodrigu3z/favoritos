<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'App\Http\Controllers\AppController@index');
Route::get('/atras', 'App\Http\Controllers\AppController@goBack');

Route::get('/usuario/registro', 'App\Http\Controllers\UserController@store');
Route::post('/usuario', 'App\Http\Controllers\UserController@create')->name('users.register');
Route::get('/ingresar', 'App\Http\Controllers\SessionController@store');
Route::post('/login', 'App\Http\Controllers\SessionController@login')->name('user.login');
Route::get('/salir', 'App\Http\Controllers\SessionController@destroy')->name('login.destroy');

Route::get('/favorite/user/{user}', 'App\Http\Controllers\FavoriteController@listFavoriteUser')->name('list.favorite.user');

Route::get('/inicio/favorito', 'App\Http\Controllers\FavoriteController@index');
Route::get('/favorito/crear', 'App\Http\Controllers\FavoriteController@create');
Route::get('/favorito/lista', 'App\Http\Controllers\FavoriteController@list');
Route::get('/usuario/favorito', 'App\Http\Controllers\FavoriteController@userFavorites');

Route::get('/favorito/detalle/{favorite}', 'App\Http\Controllers\FavoriteController@edit')->name('favorite.edit');
Route::post('/favorito/guardar', 'App\Http\Controllers\FavoriteController@save')->name('favorite.save');
Route::delete('/favorito/eliminar/{favorite}', 'App\Http\Controllers\FavoriteController@delete')->name('favorite.delete');


Route::get('/inicio/categoria', 'App\Http\Controllers\CategoryController@index')->name('category.home');
Route::post('/categoria/guardar', 'App\Http\Controllers\CategoryController@save')->name('category.save');
Route::get('/categoria/crear', 'App\Http\Controllers\CategoryController@create');
Route::get('/categoria/editar/{category}', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');
Route::delete('/categoria/eliminar/{category}', 'App\Http\Controllers\CategoryController@delete')->name('category.delete');



