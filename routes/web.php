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

	Route::get('/', 'BowlingController@index');
	Route::post('/', 'BowlingController@addGame');

	Route::get('/game/{game}', 'BowlingController@show');
	Route::get('/bowler/{name}', 'BowlingController@showAll');
