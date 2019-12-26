<?php

Route::group(['prefix' => 'prod'], function () {
    Route::get('all', 'ProductController@getAllProds');
    Route::get('promo', 'ProductController@getPromoProds');
    Route::get('new', 'ProductController@geNewProds');
});

Route::group(['prefix' => 'user'], function () {
    Route::post('login', 'UserController@login');
    Route::post('logout', 'UserController@logout');
    Route::get('all', 'UserController@getAllUser');
    Route::get('me', 'UserController@me');
    Route::post('register', 'UserController@register');
    Route::get('refresh', 'UserController@refresh'); //refresh token
    Route::get('bill', 'UserController@getBill');
});