<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(array('prefix' => 'api'), function () {
  Route::post('dvds', 'SearchController@results');
});

Route::get('/', function() {
    return View::make('index'); // will return app/views/index.php
});
