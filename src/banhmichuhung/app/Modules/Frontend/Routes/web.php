<?php
Route::get('deleteSession', function () {
    Session::flush();
});
Route::get('/', 'PageController@getIndex');
Route::get('home', 'PageController@getIndex');
Route::get('about', 'PageController@getAbout');
Route::get('contact', 'PageController@getContact');
Route::get('search', 'PageController@getSearch');

//UserController
Route::get('register', 'UserController@getRegister');
Route::post('register', 'UserController@postRegister');
Route::get('login', 'UserController@getLogin');
Route::post('login', 'UserController@postLogin');
Route::get('logout','UserController@postLogout');

//Product controller
Route::get('product-type/{type}', 'ProductController@getProductType');
Route::get('product-detail/{id}', 'ProductController@getProductDetail');

//Cart controller
Route::get('add-to-cart/{id}', 'CartController@getAddToCart');
Route::get('delete/{id}', 'CartController@deleteCartProd');
Route::get('checkout', 'CartController@checkout');
Route::post('checkout', 'CartController@postCheckout');