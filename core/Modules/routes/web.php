<?php

// Route::get('/demo', function () {
//     return view('views::index');
// });

Route::group(['namespace' => 'Modules\Http\Controllers'], function () {
    Route::get('/demo', 'DemoController@getIndex');
 });

// Route::get('demo', 'DemoController@getIndex');