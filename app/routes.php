<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::any('ola/{usuario?}', function($usuario = 'Guest') {
	return View::make('hello')->with('usuario', $usuario);
});

Route::get('marketing/target/add', 'TargetController@getAdd');
Route::post('marketing/target/add', 'TargetController@postAdd');