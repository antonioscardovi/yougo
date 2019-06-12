<?php

namespace App\Http\Controllers\Vehicle;

use App\CustomerVehicle;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Vehicle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use DateTime;

class VehicleController extends ApiController
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $vehicles = Vehicle::with('modelOfVehicle.makeOfVehicle', 'images')->get();

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
    public function show($id)
    {
        // $vehicle = Vehicle::with('modelOfVehicle.makeOfVehicle')->get();
        $vehicle = Vehicle::with('modelOfVehicle.makeOfVehicle', 'images')->findOrFail($id);


        // $vehicle = Vehicle::with('modelOfVehicle.makeOfVehicle')->get();

        return $this->showOne($vehicle);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Vehicle $vehicle)
    {
        $user = auth('customers-api')->user();
        if(!$user) return abort(403);

        //        if (!$customer->isVerified()) {
        //            return $this->errorResponse('Morate biti verificirani za nastavak', 409);
        //        }

        if (!$vehicle->isAvailable()) {
            return $this->errorResponse('Vozilo nije dostupno za rentanje', 409);
        }

        return DB::transaction(function () use ($request, $vehicle, $user) {
            $vehicle['status'] =  $vehicle->setToNotAvailable();
            $vehicle->save();

            $reservation = CustomerVehicle::create([

                'customer_id' => $user->id,
                'vehicle_id' => $vehicle->id,
                'from_date' => $request->from_date,
                'to_date' => $request->to_date,
                'vehicle_price' => $vehicle->price
            ]);

            //'price_of_reservation' => $request->get('days') * $vehicle['price'],

            $fDate = $reservation->from_date;
            $tDate = $reservation->to_date;
            $dateTime1 = new DateTime($fDate);
            $dateTime2 = new DateTime($tDate);
            $interval = $dateTime1->diff($dateTime2);
            $days = $interval->format('%a');

            Mail::send(new SendMail($user->email, $days));

            return $this->showOne($reservation, 201);
        });
    }
}
