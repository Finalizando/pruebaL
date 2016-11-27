<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| post, get, put, delete
*/

//PARA PDF
Route::get('pdf', 'PdfController@invoice');
//PARA PDF


//video crud, desde tinker
Route::resource('usuario', 'UsuarioController');

Route::get('controlador', 'PruebaController@index');
Route::get('nombre_controlador/{nombre}', 'PruebaController@nombre');

//ver boton
Route::get('create_user', function () {
    return view('/usuario/create');
});
Route::get('formulario_u', function () {
    return view('/usuario/form_user');
});


Route::resource('movie', 'MovieController');


Route::get('prueba', function(){
	return "Hola desde routes.php";
});

Route::get('nombre/{nombre}', function($nombre){
	return "Mi nombre es: ".$nombre;
});

Route::get('edad/{edad?}', function($edad=20){
	return "Mi edad es: ".$edad;
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('pruebas', [
	'uses' => 'TestController@index'
]);

//codFaci
Route::group(['prefix' => 'admin'], function(){
	Route::resource('users', 'UsersController');
});
