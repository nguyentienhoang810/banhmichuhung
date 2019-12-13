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

Route::get('/deleteAllSession', function () {
    session()->flush();
});

//Middleware
Route::get('/start', function () {
    return 'start';
})->middleware('SampleMiddleware');

Route::get('/finish', function () {
    return 'finish';
});

//Group router

Route::group(['prefix' => 'schema'], function () {
    
    Route::get('create-table', function() {
        Schema::create('SampleUser', function ($table) {
            $table->increments('id');
            $table->string('email', 50)->default('defaultMail@mail.com');
            $table->string('password');
            $table->tinyInteger('level')->unsigned()->nullable();
            $table->timestamps();
        });
    });

    //Thêm cột
    Route::get('add-col', function () {
        Schema::table('SampleUser', function ($table) {
            $table->string('new_col');
        });
    });

    //Sửa tên cột
    Route::get('rename-col', function () {
        Schema::table('SampleUser', function ($table) {
            $table->renameColumn('new_col', 'new_column'); //Cần cài thêm Doctrine qua composer
        });
    });

    //Đổi kiểu dữ liệu của cột
    Route::get('change-col-type', function () {
        Schema::table('SampleUser', function ($table) {
            $table->integer('new_column')->unsigned()->change();
        });
    });

    //Xoá cột
    Route::get('drop-col', function () {
        if (Schema::hasColumn('SampleUser', 'new_column')) {
            Schema::table('SampleUser', function ($table) {
                $table->dropColumn('new_column');
            });
        }
    });

    //khoá ngoại
    Route::get('create-info-table', function () {
        Schema::create('info', function ($table) {
            $table->increments('id');
            $table->string('id_number', 100);
            $table->string('address');
            $table->string('phone');
            $table->integer('users_id')->unsigned();

            //Không thể xoá user khi chưa xoá row info có reference đến users_id
            // $table->foreign('users_id')->references('id')->on('SampleUser');

            //Có thể xoá user có reference đến info chứa users_id
            $table->foreign('users_id')->references('id')->on('SampleUser')->onDelete('cascade');
        });
    });
});