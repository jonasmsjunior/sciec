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
    return view('welcome');
});

Route::get('usuario', 'UsersController@index');
Route::post('usuario','UsersController@store');
Route::get('usuario/{id}','UsersController@show');
Route::delete('usuario/{id}','UsersController@destroy');
Route::put('usuario/{id}','UsersController@update');




Route::get('teste', function () {
    return \App\Entities\User::all();
});

