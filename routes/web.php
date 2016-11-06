<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/ipsum', 'IpsumController@get')->name('ipsum.get'); 
Route::post('/ipsum', 'IpsumController@post')->name('ipsum.post'); 

Route::get('/usergen', 'UsergenController@get')->name('usergen.get'); 
Route::post('/usergen', 'UsergenController@post')->name('usergen.post'); 

