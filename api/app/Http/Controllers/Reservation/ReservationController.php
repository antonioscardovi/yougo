<?php

namespace App\Http\Controllers\Reservation;

use App\CustomerVehicle;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function store(Request $request)
    {
//        $rules = [
//            'customer_id' => 'required',
//            'vehicle_id' => 'required',
//        ];
//        //Auth::user()->id
//        $this->validate($request, $rules);
//
//        $data = $request->all();
//        $data['customer_id'] =;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = CustomerVehicle::findOrFail($id);

        return $this->showOne($reservation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
