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

Route::get('/', 'legisladorController@index');

Route::post('/', 'legisladorController@index'); // para enviar el formulario necesitamos crear la ruta por POST

Route::post('/AgregarLegislador', 'legisladorController@store'); // Funcion que agrega un Legislador a la DB

Route::get('/adminpanel', 'legisladorController@editview');

Route::post('/adminpanel', 'legisladorController@editview');

Route::post('/eliminarlegislador', 'LegisladorController@eliminarlegislador');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
