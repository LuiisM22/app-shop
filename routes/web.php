<?php
Route::get('/','TestControler@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
