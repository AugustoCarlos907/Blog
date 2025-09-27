<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
        [
           'name'=>'Administrator',
           'email'=> 'admin@gmail.com',
           'password'=> bcrypt('Aa123456'), 
           'role'=>'admin'
        ], 
        [
            'name'=>'normal_user',
            'email'=> 'normal@gmail.com',
            'password'=> bcrypt('Aa123456'), 
            'role'=>'user'
        ], 
        [
            'name'=>'visitor',
            'email'=> 'visitor@gmail.com',
            'password'=> bcrypt('Aa123456'), 
            'role'=>'visitor'
        ]
    ];

        DB::table('users')->insert($users);
    }
}
