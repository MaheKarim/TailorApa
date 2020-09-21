<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([

            'role_id' => '1',
            'name' => 'MR Admin',
            'username' => 'admin',
            'email' => 'admin@blog.com',
            'password' => Hash::make('password'),
            'created_at' => \Carbon\Carbon::now(),

        ]);
        DB::table('users')->insert([

            'role_id' => '2',
            'name' => 'Customer',
            'username' => 'customer',
            'email' => 'customer@blog.com',
            'password' => Hash::make('password'),
            'created_at' => \Carbon\Carbon::now(),

        ]);

    }
}
