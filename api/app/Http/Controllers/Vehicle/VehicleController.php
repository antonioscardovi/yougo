<?php

namespace App\Http\Controllers\Vehicle;

use App\Customer;
use App\CustomerVehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Vehicle;
use Illuminate\Support\Facades\DB;

class VehicleController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::with('modelOfVehicle.makeOfVehicle')->get();
        // $vehicles= Vehicle::all();
        // return view('pages.customers',compact('customers'));
        return $this->showAll($vehicles);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        // $vehicle = Vehicle::with('modelOfVehicle.makeOfVehicle')->get();

        // $vehicle = Vehicle::with('modelOfVehicle.makeOfVehicle')->get();

        return $this->showOne($vehicle);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Vehicle $vehicle, Customer $customer)
    {
        //        if (!$customer->isVerified()) {
        //            return $this->errorResponse('Morate biti verificirani za nastavak', 409);
        //        }

        if (!$vehicle->isAvailable()) {
            return $this->errorResponse('Vozilo nije dostupno za rentanje', 409);
        }

        return DB::transaction(function () use ($request, $vehicle, $customer) {
            $vehicle['status'] =  $vehicle->setToNotAvailable();
            $vehicle->save();

            $reservation = CustomerVehicle::create([
                'customer_id' => $request->get('customer_id'),
                'vehicle_id' => $vehicle->id,
                'price_of_reservation' => $request->get('days') * $vehicle['price'],
            ]);

            return $this->showOne($reservation, 201);
        });
    }
}