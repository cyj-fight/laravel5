<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        for ($i=0; $i < 3; $i++) {
            User::create([
                'name'   => 'cyj'.$i,
                'email'    => 'cyj_fight'.$i.'@163.com',
                'password'    => md5('123456'),
            ]);
        }
    }

}