<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //Schema::enableForeignKeyConstraints();

        Schema::create('make_of_vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('vehicle_id')->unsigned()->default(0);
            $table->foreign('vehicle_id')->references('id')->on('vehicles');


            $table->string('name');
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
        Schema::dropIfExists('makes');
    }
}