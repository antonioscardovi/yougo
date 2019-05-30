<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerVehicle extends Model
{
    protected $guarded = [];


    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }


    public function customer() {
        return $this->belongsTo(Customer::class);
    }

//    public function renting() {
//        return $this->rent == Vehicle::UNAVAILABLE_VEHICLE;
//    }
}
