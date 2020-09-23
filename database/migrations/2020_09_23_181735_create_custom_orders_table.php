<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('body_size')->nullable();
            $table->string('chest_size')->nullable();
            $table->string('neck_size')->nullable();
            $table->string('sleeve_size')->nullable();
            $table->string('pant_size')->nullable();
            $table->string('waist_size')->nullable();
            $table->integer('status_name_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_orders');
    }
}
