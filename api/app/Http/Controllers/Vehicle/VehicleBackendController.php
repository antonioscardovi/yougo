<?php

namespace App\Http\Controllers\Vehicle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vehicle;
use App\MakeOfVehicle;
use App\ModelOfVehicle;

class VehicleBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::with('modelOfVehicle')->get();
        // $vehicles = Vehicle::all();
        // $vehicles::with('makeOfVehicle')->get();
        // $make = modelOfVehicle::with('makeOfVehicle')->get();

        return view('pages.vehicles', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $makes = MakeOfVehicle::all();
        $models = ModelOfVehicle::with('makeOfVehicle')->get();

        return view('pages.addVehicle', compact('makes', 'models'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'make' => ['required', 'min:3', 'max:255'],
            'model' => ['required', 'min:3', 'max:255'],
            'type' => ['required', 'min:3', 'max:255'],
            'engine_power' => ['required'],
            'door_number' => ['required'],
            'description' => ['required', 'min:3', 'max:255'],
            'auto_ac' => [],
            'status' => [],
            // 'image' => []
        ]);
        Vehicle::create($attributes);

        return redirect('/vehicles');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('pages.vehicle', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        return view('pages.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Vehicle $vehicle)
    {
        $vehicle->make = request('make');
        $vehicle->model = request('model');
        $vehicle->type = request('type');
        $vehicle->engine_power = request('power');
        $vehicle->door_number = request('doors');
        $vehicle->description = request('description');
        $vehicle->auto_ac = request('auto_ac');
        $vehicle->status = request('status');

        $vehicle->save();

        return redirect('vehicles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect('vehicles');
    }
}