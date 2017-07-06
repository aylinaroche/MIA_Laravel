<?php

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
/*

//Hola/<nombre> GET

Route::get('/hola/{nombre}', function ($nombre) {

    return "HOLA {$nombre}";
});

//Hola/<nombre> con un Controlador

Route::get('/hola/{nombre}','TestController@hola');

*/
/*
//Enviar a una vissta
Route::get('/welcom', function () {

  return view('welcome');

   
});

*/
//////////////

//Route::get('/posts','PostsController@index');



Route::get('/', function () {

  return view('cloud.inicio');
   
});

Route::name('store')->post('/posts','PostsController@store');

//Route::resource('store','PsController');

Route::resource('post','PsController');

Route::name('registrar')->post('/','UsuarioController@store');

Route::name('inicio')->get('/','PostsController@index');

Route::name('login')->get('/','LoginController@index');

Auth::routes();



//

Route::get('/home', 'HomeController@index')->name('home');



//Route::resource('mail','EmailController@store');

Route::name('mail')->get('/mail/{correo}','EmailController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
