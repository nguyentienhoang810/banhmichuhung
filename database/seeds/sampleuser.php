<?php

use Illuminate\Database\Seeder;

class sampleuser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sampleuser')->insert(
            ['id'=>3,'email'=>'admin@mail.com', 'password'=>'pass1', 'level'=>1],
            ['id'=>4,'email'=>'admin2@mail.com', 'password'=>'pass2', 'level'=>2],
            ['id'=>5,'email'=>'admin3@mail.com', 'password'=>'pass3', 'level'=>3],
            ['id'=>6,'email'=>'admin4@mail.com', 'password'=>'pass4', 'level'=>2],
            ['id'=>7,'email'=>'admin5@mail.com', 'password'=>'pass5', 'level'=>3],
            ['id'=>8,'email'=>'admin6@mail.com', 'password'=>'pass6', 'level'=>1]
        );
    }
}
