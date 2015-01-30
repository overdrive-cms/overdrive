<?php

/*
|--------------------------------------------------------------------------
| Module Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the module.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['prefix' => 'static'], function() {
	Route::get('/', function() {
		return Modules\StaticPages\StaticPage::all();
	});
});

Route::get('{slug}', 'PageController@showPage');

/*Route::get('{slug}', function($slug) {
	$page = Modules\StaticPages\StaticPage::where('url', $slug)->get();

	if($page->isEmpty()) {
		abort(404);
	}

	return $page;
});*/