<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auto/principal', 'AutosController@index');
Route::get('/auto/demo', 'AutosController@demo');
Route::get('/auto/otra/pagina/', 'AutosController@otrapagina');

Route::get('/moto/principal', 'MotosController@index');

Route::get('/marca', 'MarcasController@index');
Route::post('/marca/pedido','MarcasController@pedido');

Route::get('/marca/pagina', 'MarcasController@demo');
Route::get('/marca/seccion', 'MarcasController@otrapagina');
