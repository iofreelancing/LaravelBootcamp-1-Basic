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

Route::get('/create','StudentController@create');
Route::get('/show/{studentId}','StudentController@show');

Route::post('/store','StudentController@store');

Route::get('/list','StudentController@index');


Route::get('/delete/{studentId}','StudentController@deleteStudent');


Route::get('/edit/{studentId}','StudentController@edit');

Route::post('/update/{studentId}','StudentController@update');