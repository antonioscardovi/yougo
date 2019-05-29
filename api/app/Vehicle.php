<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    const AVAILABLE_VEHICLE = 'available';
    const UNAVAILABLE_VEHICLE = 'unavailable';

    protected $fillable = [

        'make',
        'model',
        'type',
        'engine_power',
        //'auto_ac',
        //'gearbox',
        'door_number',
        'description',
        'image',
        'status',
        'price',

        //'customer_id',
        'make_id',
        'model_id'
    ];

    public function isAvailable()
    {
        return $this->status == Vehicle::AVAILABLE_VEHICLE;
    }

    public function customers()
    {
        return $this->hasMany(Customer::class); // belongsToMany ???
    }

    /*
    public function reservations() {
        return $this->belongsToMany(Reservation::class);
    }
    */

    //    public function makeOfVehicles() {
    //        return $this->belongsToMany(MakeOfVehicle::class);
    //    }

    public function makeOfVehicles()
    {
        return $this->hasMany(MakeOfVehicle::class);
    }
}