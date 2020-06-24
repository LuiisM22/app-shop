<?php
Route::get('/','TestControler@welcome');

Auth::routes();
//aqui esta otro comentario
//Obvio
Route::get('/home', 'HomeController@index')->name('home');
