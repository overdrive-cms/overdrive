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
    \Installer::newModule('');
    /*$path = storage_path('downloads/modules/test.zip');
    $resource = fopen($path, 'w+');
    $stream = GuzzleHttp\Stream\Stream::factory($resource);
    Guzzle::get('https://github.com/overdrive-cms/test/archive/master.zip', [
        'save_to' => $stream,
        'allow_redirects' => true,
    ]);
    $zippy = \Alchemy\Zippy\Zippy::load();
    $archive = $zippy->open($path);
    $archive->extract(storage_path('downloads/modules'));*/
    //return Module::install('https://github.com/overdrive-cms/test.git');
});
