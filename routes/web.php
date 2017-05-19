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
//Tipo de Atividade *
Route::get('atividade/config/index', 'ActivitiesController@index');// feito
Route::post('atividade/config/store', 'ActivitiesController@store');//fazendo
Route::get('atividade/config/show/{id}', 'ActivitiesController@show');//feito
Route::delete('atividade/config/delete/{id}', 'ActivitiesController@destroy');//feito obs: mudar para exclusao logica
Route::get('atividade/config/edit/{id}', 'ActivitiesController@edit');
Route::put('atividade/config/update/{id}', 'ActivitiesController@update');

//Tipo de actividade usuario

Route::get('usuario/atividade/config/index', 'ActivitiesController@index');// feito
Route::post('usuario/atividade/config/store', 'ActivitiesController@store');//fazendo
Route::get('usuario/atividade/config/show/{id}', 'ActivitiesController@show');//feito
Route::delete('usuario/atividade/config/delete/{id}', 'ActivitiesController@destroy');//feito obs: mudar para exclusao logica
Route::get('usuario/atividade/config/edit/{id}', 'ActivitiesController@edit');
Route::put('usuario/atividade/config/update/{id}', 'ActivitiesController@update');

//Instituições

//Course

//Participação

//Artigos

//Evento

//Atividade

// obs: as outras tabelas assegir sao tabelas n pra n
