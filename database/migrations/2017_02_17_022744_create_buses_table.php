<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plate_number');
            $table->string('side_number');
            $table->string('initial_point');
            $table->string('destination_point');
            $table->date('departure_time');
            $table->date('arrival_time');
            $table->integer('available_seat');
            $table->integer('total_seat');
            $table->integer('driver');
            $table->integer('assistant');
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
        Schema::drop('buses');
    }
}
