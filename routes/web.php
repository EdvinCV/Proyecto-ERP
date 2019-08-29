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
    return redirect('/home');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//RutasCategorias
Route::get('/categoria', 'CategoriaController@index');
Route::post('/categoria/registrar', 'CategoriaController@store');
Route::put('/categoria/actualizar', 'CategoriaController@update');
Route::put('/categoria/desactivar', 'CategoriaController@desactivar');
Route::put('/categoria/activar', 'CategoriaController@activar');
Route::delete('/categoria/{categoria}/delete', 'CategoriaController@drop');
//Rutas roles
Route::get('/rol', 'RolController@index');
Route::post('/rol/nuevo', 'RolController@store');
Route::put('/rol/editar', 'RolController@edit');
