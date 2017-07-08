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

//PRUEBA

Route::name('store')->post('/posts','PostsController@store');

Route::resource('post','PsController');

Route::name('inicio')->get('/','PostsController@index');


//INICIO

Route::resource('/','InicioController');

//EMAIL

Route::name('mail')->get('/mail/{correo}','EmailController@store');

//AUTH

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*			USUARIO 		*/


Route::name('registrar')->post('/','UsuarioController@store');

//EDITAR

Route::get('/modificar', 'UsuarioController@index')->name('modificar');

Route::resource('usuario', 'UsuarioController');


Route::get('/actualizar', 'EditarController@index')->name('actualizar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
