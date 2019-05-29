<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakeOfVehicle extends Model
{
    //protected $primaryKey = 'name';

    protected $fillable = [
        'name'
    ];

/*    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }*/

    public function makeOfVehicles()
    {
        return $this->hasMany(ModelOfVehicle::class);
    }
}