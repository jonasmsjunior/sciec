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
//Usuario
// refazer depois mudando para tabela com campos mais faceis
Route::get('usuario/index', 'UsersController@index');// feito
Route::post('usuario/store', 'UsersController@store');//fazendo
Route::get('usuario/show/{id}', 'UsersController@show');//feito
Route::delete('usuario/delete/{id}', 'UsersController@destroy');//feito obs: mudar para exclusao logica
Route::get('usuario/edit/{id}', 'UsersController@edit');
Route::put('usuario/update/{id}', 'UsersController@update');
//Tipo de Usuario

Route::get('usuario/config/index', 'TypeUsersController@index');// feito
Route::post('usuario/config/store', 'TypeUsersController@store');//fazendo
Route::get('usuario/config/show/{id}', 'TypeUsersController@show');//feito
Route::delete('usuario/config/delete/{id}', 'TypeUsersController@destroy');//feito obs: mudar para exclusao logica
Route::get('usuario/config/edit/{id}', 'TypeUsersController@edit');
Route::put('usuario/config/update/{id}', 'TypeUsersController@update');

