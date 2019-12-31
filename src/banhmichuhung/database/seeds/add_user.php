<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class add_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'full_name' => 'user ZERO',
            'email' => 'zero@mail.com',
            'password' => Hash::make('123123123'),
            'phone' => '99999999',
            'address' => 'zero address'
        ]);
    }
}
