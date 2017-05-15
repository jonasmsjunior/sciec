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

Route::get('usuario', 'UsersController@index');// feito
Route::post('usuario', 'UsersController@store');//fazendo
Route::get('usuario/{id}', 'UsersController@show');//feito
Route::delete('usuario/{id}', 'UsersController@destroy');
Route::get('usuario', 'UsersController@edit');
Route::put('usuario/{id}', 'UsersController@update');



