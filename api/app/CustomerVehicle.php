<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerVehicle extends Model
{
    protected $dates = ['from_date', 'to_date'];
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
