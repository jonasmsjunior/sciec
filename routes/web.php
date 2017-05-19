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



Route::get('curso', 'CoursesController@index');
Route::get('curso/{id}/eventos','CoursesController@eventos');
Route::post('curso','CoursesController@store');
Route::get('curso/{id}','CoursesController@show');
Route::delete('curso/{id}','CoursesController@destroy');
Route::put('curso/{id}','CoursesController@update');
