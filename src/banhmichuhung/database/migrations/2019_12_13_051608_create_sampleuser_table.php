<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSampleuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sampleuser', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 50)->default('defaultMail@mail.com');
            $table->string('password');
            $table->tinyInteger('level')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('sampleuser', function ($table) {
            $table->string('new_col');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sampleuser');
    }
}
