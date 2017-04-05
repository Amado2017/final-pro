<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailableSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_seats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seat_1');
            $table->integer('seat_2');
            $table->integer('seat_3');
            $table->integer('seat_4');
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
        Schema::drop('available_seats');
    }
}
