<?php

namespace App\Http\Controllers\Reservation;

use App\Customer;
use App\CustomerVehicle;
use App\Http\Controllers\ApiController;
use App\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReservationController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = CustomerVehicle::all();
        //echo CustomerVehicle::all();
        return $this->showAll($reservations);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Vehicle $vehicle, Customer $customer)
    {
        if (!$customer->isVerified()) {
            return $this->errorResponse('Morate biti verificirani za nastavak', 409);
        }

        if (!$vehicle->isAvailable()) {
            return $this->errorResponse('Vozilo nije dostupno za rentanje',409);
        }

        return DB::transaction(function () use ($request, $vehicle, $customer) {
            $vehicle->isAvailable();
            $vehicle->save();

            $reservation = CustomerVehicle::create([
                'customer_id' => $customer->id,
                'vehicle_id' => $vehicle->id,
                'price_of_reservation' => 2500,
            ]);

            return $this->showOne($reservation, 201);
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerVehicle $reservation)
    {
        //$reservation = CustomerVehicle::findOrFail($id);

        return $this->showOne($reservation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerVehicle $reservation)
    {
        //
    }
}
