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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('test', function() {
	return 'Ich bin der dev-modules Branch!';
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


// Displays all installed modules
Route::group(['prefix' => 'modules'], function() {
	Route::get('/', function() {
		debug(Module::all());
		return Module::all();
	});
});

Route::get('load', function() {
	return Module::install('https://github.com/overdrive-cms/test.git');
});
