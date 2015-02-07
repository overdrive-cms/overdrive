<?php

/*
|--------------------------------------------------------------------------
| Register The Routes File
|--------------------------------------------------------------------------
|
| This file will loaded automatically.
|
*/

Lang::addNamespace('pages', __DIR__ . '/Resources/views');

View::addNamespace('pages', __DIR__ . '/Resources/views');

require __DIR__ . '/Http/routes.php';