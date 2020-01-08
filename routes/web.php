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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//homework
Route::get('/devoirs/creation','HomeworkController@create')->name('homework_create');
Route::post('/devoirs','HomeworkController@store')->name('homework_store');

//agenda
Route::get('/agenda','AgendaController@index')->name('agenda_index');
