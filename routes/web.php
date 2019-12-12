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

Route::get('/', 'HomeController@showHome');
Route::get('/admin', 'AdminController@showAdminLogin');
Route::post('/admin', 'AdminController@login');

Route::get('/session', function () {
    session()->put('name', 'session name');
});

Route::get('/getSession', function () {
    echo session('name');
});

Route::get('/checkSession', function () {
    if(session()->has('name')) {
        echo 'Tồn tại session name';
    } else {
        echo 'Không tồn tại session name';
    }
});

Route::get('/deleteSession', function () {
    session()->forget('name');
});