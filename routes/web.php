cd<?php

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
    return view('welcome');
});

Route::get('usuario/index', 'UsersController@index');// feito
Route::post('usuario/store', 'UsersController@store');//fazendo
Route::get('usuario/show/{id}', 'UsersController@show');//feito
Route::delete('usuario/delete/{id}', 'UsersController@destroy');
Route::get('usuario/edit', 'UsersController@edit');
Route::put('usuario/update/{id}', 'UsersController@update');



