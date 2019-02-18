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

Route::get('/','home@index');//Route::get ou Route::post
Route::get('/funcionarios','funcionario@index');
Route::get('/funcionarios/{id}','funcionario@show');
Route::post('/funcionarios/{id}','funcionario@update');
Route::post('/funcionarios/add','funcionario@create');
    

