<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::enableForeignKeyConstraints();

        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('model_id')->unsigned()->default(0);
            $table->foreign('model_id')->references('id')->on('model_of_vehicles');

            //$table->enum('type',); // dodati još, i u ModelFactory
            $table->string('type');
            $table->string('engine_power');
            $table->string('door_number');
            $table->string('description', 1000);
            $table->string('image');
            $table->string('status')->default(\App\Vehicle::UNAVAILABLE_VEHICLE);
            //$table->double('price', 8, 2);//->unsigned();

            //$table->integer('customer_id')->unsigned();

            $table->timestamps();

           // $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
