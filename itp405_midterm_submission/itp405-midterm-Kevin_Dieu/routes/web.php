<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'AdminController@index')->middleware('protected');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

//Routes for midterm below
Route::get('/books/{id}', 'MidtermController@question1');

Route::get('/books', 'MidtermController@question2');
