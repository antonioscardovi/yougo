<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        \App\User::query()->truncate();
        \App\Customer::query()->truncate();
        \App\Vehicle::query()->truncate();
        \App\MakeOfVehicle::query()->truncate();
        \App\ModelOfVehicle::query()->truncate();
        //\Illuminate\Support\Facades\DB::table('customer_vehicle')->truncate();
        //\App\CustomerVehicle::query()->truncate();


        $makeQuantity = 5;
        $modelQuantity = 5;
        $userQuantity = 5;
        $customerQuantity = 5;
        $vehicleQuantity = 5;
        //$reservationQuantity = 10;



        factory(\App\User::class, $userQuantity)->create();
        factory(\App\Customer::class, $customerQuantity)->create();

        factory(\App\Vehicle::class, $vehicleQuantity)->create();

        factory(\App\MakeOfVehicle::class, $makeQuantity)->create();
        factory(\App\ModelOfVehicle::class, $modelQuantity)->create();

        //factory(database/migrations/CustomerVehicle::class, $reservationQuantity)->create();
        //factory(\App\CustomerVehicle::class, $reservationQuantity)->create();
    }
}
