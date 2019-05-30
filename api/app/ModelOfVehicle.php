<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelOfVehicle extends Model
{
    //protected $primaryKey = 'name';


    protected $fillable = [
        'name'
    ];
    /*
    public function makeOfVehicle()
    {
        return $this->belongsTo(MakeOfVehicle::class);
    }
    */
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'model_id', 'id');
    }

    public function makeOfVehicle()
    {
        return $this->belongsTo(MakeOfVehicle::class, 'make_id', 'id');
    }
}