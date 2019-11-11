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


// Route::get('/', function () {
//     // return view('welcome');
//     return view('adminLogin');
// });

// Route::get('/admin', function () {
//     return view('adminLogin');
// });