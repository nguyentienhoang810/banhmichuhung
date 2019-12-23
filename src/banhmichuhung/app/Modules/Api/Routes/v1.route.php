<?php

Route::group(['prefix' => 'prod'], function () {
    Route::get('all', 'ProductController@getAllProds');
    Route::get('promo', 'ProductController@getPromoProds');
    Route::get('new', 'ProductController@geNewProds');
});