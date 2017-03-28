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


Route::get('/', 'LancheController@index');


Route::get('/create', 'LancheController@create');
Route::post('/', 'LancheController@store');
Route::get('/{id}', 'LancheController@show');

Route::get('/{id}/edit', 'LancheController@edit');
Route::put('/{id}', 'LancheController@update');

Route::delete('/{id}', 'LancheController@destroy');
