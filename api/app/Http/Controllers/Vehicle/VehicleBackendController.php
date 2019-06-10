<?php

namespace App\Http\Controllers\Vehicle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vehicle;
use App\Image;
use App\MakeOfVehicle;
use App\ModelOfVehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class VehicleBackendController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = ModelOfVehicle::with('makeOfVehicle')->get();
        $vehicles = Vehicle::with('modelOfVehicle.makeOfVehicle', 'images')->get();

        $i = 1;
        // $vehicles = Vehicle::all();
        // $vehicles::with('makeOfVehicle')->get();
        // $make = modelOfVehicle::with('makeOfVehicle')->get();

        return view('pages.vehicles', compact('vehicles', 'models', 'i'));
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

        $request->validate(
            [
                'model_id' => 'required',
                'type' => 'required',
                'engine_power' => 'required|numeric',
                'door_number' => 'required|numeric',
                'description' => 'required',
                'price' => 'required|numeric',
                'auto_ac' => 'required',
                'gearbox' => 'required',
                // 'image' => 'required',
            ]
        );

        $this->validate($request, [
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $id_vehicle = Vehicle::insertGetId(array(
            'model_id' => request('model_id'),
            'type' => request('type'),
            'engine_power' => request('engine_power'),
            'door_number' => request('door_number'),
            'description' => request('description'),
            'price' => request('price'),
            'auto_ac' => request('auto_ac'),
            'gearbox' => request('gearbox'),
            'created_at' => now(),
            'updated_at' => now(),
        ));



        foreach ($request->file('filename') as $file) {
            $name = $file->hashName();
            $url = Storage::disk('public')->putFileAs('img', $file, $name);
            $image = new Image(array(
                'vehicle_id' => $id_vehicle,
                'filename' => 'http://localhost/storage/' . $url,
            ));
            $image->save();
        }
        return redirect('/vehicles');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        $image = Vehicle::with('images')->first();
        $i = 1;
        return view('pages.vehicle', compact('vehicle', 'image', 'i'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        $models = ModelOfVehicle::with('makeOfVehicle')->get();

        return view('pages.edit', compact('vehicle', 'models'));
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

        $vehicle->model_id = request('model_id');
        $vehicle->type = request('type');
        $vehicle->engine_power = request('engine_power');
        $vehicle->door_number = request('door_number');
        $vehicle->gearbox = request('gearbox');
        $vehicle->price = request('price');
        $vehicle->description = request('description');
        $vehicle->auto_ac = request('auto_ac');


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
        $vehicle->images()->delete();

        $vehicle->delete();

        return redirect('vehicles');
    }
}