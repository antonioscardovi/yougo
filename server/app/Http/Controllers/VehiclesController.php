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
    public function store(Vehicle $vehicles)
    {
        $attributes = request()->validate([
            'make'=>['required', 'min:3', 'max:255'],
            'model'=>['required', 'min:3', 'max:255'],
            'type'=>['required', 'min:3', 'max:255'],
            'engine_power'=>['required'],
            'door_number'=>['required'],
            'description'=>['required', 'min:3', 'max:255'],
            'auto_ac'=>[],
            'status'=>[]
        ]);
            Vehicle::create($attributes);



        // Vehicle::create(request()->validate([
        //     'make'=>['required', 'min:3', 'max:255'],
        //     'model'=>['required', 'min:3', 'max:255'],
        //     'type'=>['required', 'min:3', 'max:255'],
        //     'engine_power'=>['required'],
        //     'door_number'=>['required'],
        //     'description'=>['required', 'min:3', 'max:255']


            // dodati za price ijoš neke atribute
        // ]));
    //    $vehicle = new Vehicle();

    //    $vehicle->make = request('make');
    //    $vehicle->model = request('model');

    //    $vehicle->save();
//
//        return redirect('/dashboard');
//

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
        $vehicle = Vehicle::findOrFail($id);
     

        return view('projects.vehicle', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);

        return view('projects.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $vehicle = Vehicle::find($id);

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
    public function destroy($id)
    {
        Vehicle::find($id)->delete();

        return redirect('vehicles');
    }
}
