<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info');
    }
}
