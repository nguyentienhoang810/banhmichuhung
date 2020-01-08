<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'id' => '1',
            'name' => 'the one',
            'email' => 'zeroadmin@mail.com',
            'password' => Hash::make('123123123')
        ]);
    }
}
