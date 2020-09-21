<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Code Start Here
        DB::table('statuses')->insert([
            'status_name' => 'Order Pending',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('statuses')->insert([
            'status_name' => 'Order Approve',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);
        DB::table('statuses')->insert([
          'status_name' => 'Order Rejected',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);
        DB::table('statuses')->insert([
          'status_name' => 'Order Processing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);
        DB::table('statuses')->insert([
          'status_name' => 'Near To Complete',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);
        DB::table('statuses')->insert([
          'status_name' => 'Complete',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);
        DB::table('statuses')->insert([
          'status_name' => 'Delivery Processing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);
        DB::table('statuses')->insert([
          'status_name' => 'Delivered',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);
    }
}
