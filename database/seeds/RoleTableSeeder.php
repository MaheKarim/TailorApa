<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);
        DB::table('roles')->insert([
            'name' => 'Agent',
            'slug' => 'agent',
        ]);
        DB::table('roles')->insert([
            'name' => 'Agent Sub',
            'slug' => 'agent_sub',
        ]);
        DB::table('roles')->insert([
            'name' => 'User',
            'slug' => 'user',
        ]);

    }

}
