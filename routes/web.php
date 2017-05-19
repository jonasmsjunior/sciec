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

Route::get('atividade/config/index', 'ActivitiesController@index');// feito
Route::post('atividade/config/store', 'ActivitiesController@store');//fazendo
Route::get('atividade/config/show/{id}', 'ActivitiesController@show');//feito
Route::delete('atividade/config/delete/{id}', 'ActivitiesController@destroy');//feito obs: mudar para exclusao logica
Route::get('atividade/config/edit/{id}', 'ActivitiesController@edit');
Route::put('atividade/config/update/{id}', 'ActivitiesController@update');

//Instituições

Route::get('instituicao/index', 'InstutionsController@index');// feito
Route::post('instituicao/store', 'InstutionsController@store');//fazendo
Route::get('instituicao/show/{id}', 'InstutionsController@show');//feito
Route::delete('instituicao/delete/{id}', 'InstutionsController@destroy');//feito obs: mudar para exclusao logica
Route::get('instituicao/edit/{id}', 'InstutionsController@edit');
Route::put('instituicao/update/{id}', 'InstutionsController@update');

//Course
Route::get('curso/index', 'CoursesController@index');// feito
Route::post('curso/store', 'CoursesController@store');//fazendo
Route::get('curso/show/{id}', 'CoursesController@show');//feito
Route::delete('curso/delete/{id}', 'CoursesController@destroy');//feito obs: mudar para exclusao logica
Route::get('curso/edit/{id}', 'CoursesController@edit');
Route::put('curso/update/{id}', 'CoursesController@update');

//Participação

Route::get('participacao/index', 'ParticipationsController@index');// feito
Route::post('participacao/store', 'ParticipationsController@store');//fazendo
Route::get('participacao/show/{id}', 'ParticipationsController@show');//feito
Route::delete('participacao/delete/{id}', 'ParticipationsController@destroy');//feito obs: mudar para exclusao logica
Route::get('participacao/edit/{id}', 'ParticipationsController@edit');
Route::put('participacao/update/{id}', 'ParticipationsController@update');

//Artigos

Route::get('artigo/index', 'ArticlesController@index');// feito
Route::post('artigo/store', 'ArticlesController@store');//fazendo
Route::get('artigo/show/{id}', 'ArticlesController@show');//feito
Route::delete('artigo/delete/{id}', 'ArticlesController@destroy');//feito obs: mudar para exclusao logica
Route::get('artigo/edit/{id}', 'ArticlesController@edit');
Route::put('artigo/update/{id}', 'ArticlesController@update');

//Evento

Route::get('evento/index', 'EventsController@index');// feito
Route::post('evento/store', 'EventsController@store');//fazendo
Route::get('evento/show/{id}', 'EventsController@show');//feito
Route::delete('evento/delete/{id}', 'EventsController@destroy');//feito obs: mudar para exclusao logica
Route::get('evento/edit/{id}', 'EventsController@edit');
Route::put('evento/update/{id}', 'EventsController@update');

//Atividade

Route::get('atividade/index', 'ActivitiesController@index');// feito
Route::post('atividade/store', 'ActivitiesController@store');//fazendo
Route::get('atividade/show/{id}', 'ActivitiesController@show');//feito
Route::delete('atividade/delete/{id}', 'ActivitiesController@destroy');//feito obs: mudar para exclusao logica
Route::get('atividade/edit/{id}', 'ActivitiesController@edit');
Route::put('atividade/update/{id}', 'ActivitiesController@update');


// obs: as outras tabelas assegir sao tabelas n pra n
