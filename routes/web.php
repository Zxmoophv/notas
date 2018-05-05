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

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/contactos', function () {

	 $notas = [
	 	[
	 		'title' => 'Rutas laravel',
	 		'body' =>  'esto es la prueba del objeto 1 de las notas',
	 		'important' => true
	 	],
	 	[
	 		'title' => 'este es el titulo 2 de las notas',
	 		'body' => 'cuerpo 2 de la segunda nota',
	 		'important' => true

	 	],
	 ];


    return view ('contactos', ['notas' => $notas]);
});
