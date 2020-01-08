<?php
Route::get('/', 'AuthController@getDashboard');
Route::get('home', 'AuthController@getDashboard');

Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@postLogin');

Route::post('logout', 'AuthController@postLogout');

Route::get('register', 'AuthController@getRegister');
Route::post('register', 'AuthController@postRegister');