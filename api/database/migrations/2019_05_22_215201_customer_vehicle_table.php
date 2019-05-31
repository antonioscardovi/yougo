<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->bigInteger('vehicle_id')->unsigned();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');

            $table->double('price_of_reservation', 8, 2);//->unsigned();
            //$table->foreign('price_of_reservation')->references('price')->on('vehicles');

            //$table->date('from_date')->default('23.05.2019');
            //$table->date('to_date')->default('30.05.2019');
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
        Schema::dropIfExists('customer_vehicle');
    }
}
