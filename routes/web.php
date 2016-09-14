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
    return view('welcome');
});

Route::get('welcome','WelcomeController@index');
Route::get('param/{param1}/{param2?}','WelcomeController@param');
Route::get('tampilarray','WelcomeController@tampilArray');
Route::get('testemplate','WelcomeController@testemplate');