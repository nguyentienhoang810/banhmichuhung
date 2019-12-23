<?php

use Illuminate\Database\Seeder;

class info extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('info')->insert(
            ['id_number'=>'1111', 'address'=>'1st address', 'phone'=>'090111111', 'users_id'=>1],
            ['id_number'=>'2222', 'address'=>'2nd address', 'phone'=>'090222222', 'users_id'=>1],
            ['id_number'=>'3333', 'address'=>'3rd address', 'phone'=>'090333333', 'users_id'=>2],
            ['id_number'=>'4444', 'address'=>'4th address', 'phone'=>'090444444', 'users_id'=>3],
            ['id_number'=>'5555', 'address'=>'555 address', 'phone'=>'090555555', 'users_id'=>3],
            ['id_number'=>'6666', 'address'=>'6666 address', 'phone'=>'090666666', 'users_id'=>2],
            ['id_number'=>'7777', 'address'=>'7777 address', 'phone'=>'090777777', 'users_id'=>4],
            ['id_number'=>'8888', 'address'=>'888 address', 'phone'=>'090888888', 'users_id'=>1]
        );
    }
}
