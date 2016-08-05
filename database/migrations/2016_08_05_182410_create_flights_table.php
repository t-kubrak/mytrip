<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->char('departure', 3);
            $table->char('arrival', 3);
            $table->timestamps();
        });

        Schema::table('flights', function ($table) {
            $table->foreign('departure')->references('code')->on('airports');
            $table->foreign('arrival')->references('code')->on('airports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flights');
    }
}
