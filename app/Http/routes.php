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

Route::get('controlador', 'PruebaController@index');
Route::get('nombre_controlador/{nombre}', 'PruebaController@nombre');

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
