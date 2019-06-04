<?php

namespace App\Http\Controllers\Vehicle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vehicle;
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
        // dd($path = $request->file('image')->store('public/img'));

        // return $path;

        // dd(request(
        //     [
        //         'model_id',
        //         'type',
        //         'engine_power',
        //         'door_number',
        //         'description',
        //         'price',
        //         'auto_ac',
        //         'gearbox',
        //         'image',
        //     ]
        // ));

        // $vehicle = Vehicle
        $vehicle = Vehicle::where("id", $request->input('id'))->first();

        $request->file('image')->move(public_path('img/'), $request->file('image')->getClientOriginalName());
        $image = $vehicle->image = 'img/' . $request->file('image')->getClientOriginalName();


        $attributes = request()->validate([
            'model_id' => ['required'],
            'type' => ['required'],
            'engine_power' => ['required'],
            'door_number' => ['required'],
            'description' => ['required', 'min:3', 'max:255'],
            'price' => ['required'],
            'auto_ac' => [],
            'gearbox' => [],
            // 'status' => [],
            // $image => ['required']
        ]);

        // $image = request()->validate([
        //     'image' => ['required']
        // ]);

        // if (Input::hasfile('image')) 


        // dd(Storage::disk('public')->put($attributes['image'], 'car'));

        // $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        // request()->image->move(public_path('img'), $imageName);

        $vehicle->image = $image;
        $vehicle->save();

        Vehicle::create($attributes, $image);

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
        $vehicle->image = request('image');

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