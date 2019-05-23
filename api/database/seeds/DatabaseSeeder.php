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
        \App\MakeOfVehicle::query()->truncate();
        \App\ModelOfVehicle::query()->truncate();
        \App\Vehicle::query()->truncate();
        \Illuminate\Support\Facades\DB::table('customer_vehicle')->truncate();

        $makeQuantity = 3;
        $modelQuantity = 3;
        $userQuantity = 20;
        $customerQuantity = 30;
        $vehicleQuantity = 15;
        $reservationQuantity = 10;

        factory(\App\MakeOfVehicle::class, $makeQuantity)->create();
        factory(\App\ModelOfVehicle::class, $modelQuantity)->create();

        factory(\App\User::class, $userQuantity)->create();
        factory(\App\Customer::class, $customerQuantity)->create();

        factory(\App\Vehicle::class, $vehicleQuantity)->create();

        //factory(database/migrations/CustomerVehicleTable::class, $reservationQuantity)->create();
    }
}
