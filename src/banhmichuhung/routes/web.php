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

// Route::get('/', 'HomeController@showHome');
// Route::get('/admin', 'AdminController@showAdminLogin');
// Route::post('/admin', 'AdminController@login');

// Route::get('/session', function () {
//     session()->put('name', 'session name');
// });

// Route::get('/getSession', function () {
//     echo session('name');
// });

// Route::get('/checkSession', function () {
//     if(session()->has('name')) {
//         echo 'Tồn tại session name';
//     } else {
//         echo 'Không tồn tại session name';
//     }
// });

// Route::get('/deleteSession', function () {
//     session()->forget('name');
// });

// Route::get('/deleteAllSession', function () {
//     session()->flush();
// });

// //Middleware
// Route::get('/start', function () {
//     return 'start';
// })->middleware('SampleMiddleware');

// Route::get('/finish', function () {
//     return 'finish';
// });

// //Group router

// Route::group(['prefix' => 'schema'], function () {

//     //Handle by migration file
//     Route::get('create-table', function() {
//         Schema::create('SampleUser', function ($table) {
//             $table->increments('id');
//             $table->string('email', 50)->default('defaultMail@mail.com');
//             $table->string('password');
//             $table->tinyInteger('level')->unsigned()->nullable();
//             $table->timestamps();
//         });
//     });

//     //Thêm cột
//     Route::get('add-col', function () {
//         Schema::table('SampleUser', function ($table) {
//             $table->string('new_col');
//         });
//     });

//     //Sửa tên cột
//     Route::get('rename-col', function () {
//         Schema::table('SampleUser', function ($table) {
//             $table->renameColumn('new_col', 'new_column'); //Cần cài thêm Doctrine qua composer
//         });
//     });

//     //Đổi kiểu dữ liệu của cột
//     Route::get('change-col-type', function () {
//         Schema::table('SampleUser', function ($table) {
//             $table->integer('new_column')->unsigned()->change();
//         });
//     });

//     //Xoá cột
//     Route::get('drop-col', function () {
//         if (Schema::hasColumn('sampleuser', 'new_col')) {
//             Schema::table('sampleuser', function ($table) {
//                 $table->dropColumn('new_col');
//             });
//         }
//     });

//     //khoá ngoại
//     Route::get('create-info-table', function () {
//         Schema::create('info', function ($table) {
//             $table->increments('id');
//             $table->string('id_number', 100);
//             $table->string('address');
//             $table->string('phone');
//             $table->integer('users_id')->unsigned();

//             //Không thể xoá user khi chưa xoá row info có reference đến users_id
//             // $table->foreign('users_id')->references('id')->on('SampleUser');

//             //Có thể xoá user có reference đến info chứa users_id
//             $table->foreign('users_id')->references('id')->on('SampleUser')->onDelete('cascade');
//         });
//     });
// });

// //Thao tác với dữ liệu trong database
// Route::group(['prefix' => 'query'], function () {
//     Route::get('insert-data', function () {
//         DB::table('sampleuser')->insert(['email'=>'admin@mail.com', 'password'=>'pass1', 'level'=>1]);
//     });
//     Route::get('update', function () {
//         DB::table('sampleuser')->where('id', '=', 1)->update(['email'=>'admin@adminmail.com', 'password'=>'pass1', 'level'=>1]);

//         //Thêm điều kiện
//         // DB::table('sampleuser')->where('id', '>', 1)->update(['email'=>'admin@adminmail.com', 'password'=>'pass1', 'level'=>1]);
//     });
//     Route::get('delete', function () {
//         DB::table('sampleuser')->where('id', 1)->delete();
//     });

//     //Lấy ra user với userid trong bản info
//     Route::get('join', function () {
//         $users = DB::table('sampleuser')->join('info', 'sampleuser.id', '=', 'info.users_id')->select('sampleuser.id', 'email', 'password')->get();
//         dd($users);
//     });

//     Route::get('where', function () {
//         $users = DB::table('sampleuser')->where('id', '=', 2)->get();
//         dd($users);
//     });

//     Route::get('where-and', function () {
//         $users = DB::table('sampleuser')->where('id', '>', 2)->where('id', '<', 4)->get();
//         dd($users);
//     });

//     Route::get('or-where', function () {
//         $users = DB::table('sampleuser')->where('id', '>', 2)->orwhere('id', '>', 4)->get();
//         dd($users);
//     });
// });

// //Model
// Route::group(['prefix' => 'model'], function () {
//     Route::get('customer', function () {
//         $customer = App\Customer::all()->toarray();
//         dd($customer);
//     });

//     Route::get('find-customer', function () {
//         $customer = App\Customer::find(15)->toarray();
//         dd($customer);
//     });
// });





//Khoapham training
// Route::get('deleteSession', function () {
//     Session::flush();
// });
// Route::get('/', 'PageController@getIndex');
// Route::get('home', 'PageController@getIndex');
// Route::get('about', 'PageController@getAbout');
// Route::get('contact', 'PageController@getContact');
// Route::get('search', 'PageController@getSearch');

// //UserController
// Route::get('register', 'UserController@getRegister');
// Route::post('register', 'UserController@postRegister');
// Route::get('login', 'UserController@getLogin');
// Route::post('login', 'UserController@postLogin');
// Route::get('logout','UserController@postLogout');

// //Product controller
// Route::get('product-type/{type}', 'ProductController@getProductType');
// Route::get('product-detail/{id}', 'ProductController@getProductDetail');

// //Cart controller
// Route::get('add-to-cart/{id}', 'CartController@getAddToCart');
// Route::get('delete/{id}', 'CartController@deleteCartProd');
// Route::get('checkout', 'CartController@checkout');
// Route::post('checkout', 'CartController@postCheckout');

//DI
Route::get('pay', 'PayOrderController@store');