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

Route::get('/', 'HomeController@showWelcome');

Route::get('/teste', function() {
	$parseCSV = new parseCSV();
	print_r($parseCSV);
});

Route::group(array('prefix' => 'marketing'), function() {
	Route::resource('target', 'Marketing_TargetController');
});

Route::group(array('prefix' => 'operacional'), function() {
	Route::resource('chargerun', 'Operacional_ChargerunController');
}); 
