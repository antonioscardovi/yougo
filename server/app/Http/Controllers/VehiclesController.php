<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;
class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('projects.vehicles')
            ->with('vehicles', Vehicle::all());

        $vehicles = Vehicle::all();
        return view('projects.index', compact('vehicles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Vehicle::create(request()->validate([
            'make'=>['required', 'min:3', 'max:255'],
            'model'=>['required', 'min:3', 'max:255'],
            'type'=>['required', 'min:3', 'max:255'],
            'engine_power'=>['required'],
            'door_number'=>['required'],
            'description'=>['required', 'min:3', 'max:255']


            // dodati za price ijoš neke atribute
        ]));
    //    $vehicle = new Vehicle();

    //    $vehicle->make = request('make');
    //    $vehicle->model = request('model');

    //    $vehicle->save();
//
//        return redirect('/dashboard');
//
        //return request()->all();
        return redirect('/vehicles');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::find($id);

        return view('vehicles')->withVehicle($vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehichle $vehichle)
    {
        return view('projects.vehichles.edit', compact($vehichle));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
