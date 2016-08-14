<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Home routes...
Route::get('/', 'MainController@index');

//Registration routes...
Route::get('/register', 'MainController@register');
Route::post('/register', 'MainController@store');
Route::get('/login', 'MainController@login');

//Authentication routes...
Route::post('auth/login', 'MainController@authenticate');
Route::get('auth/logout', 'MainController@logout');
Route::post('auth/signature', 'MainController@signature');

//Protected Route...
Route::get('/signature', [
    'middleware' => 'auth',      
    'uses' => 'MainController@signature']);


Route::post('/signed', [
    'middleware' => 'auth',      
    'uses' => 'MainController@signed']);