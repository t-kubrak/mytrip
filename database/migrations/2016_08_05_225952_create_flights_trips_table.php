<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_trip', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('flight_id')->unsigned();
            $table->integer('trip_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('flight_trip', function ($table) {
            $table->foreign('flight_id')->references('id')->on('flights');
            $table->foreign('trip_id')->references('id')->on('trips');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flights_trips');
    }
}
