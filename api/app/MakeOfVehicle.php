<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakeOfVehicle extends Model
{
    //protected $primaryKey = 'name';

    protected $fillable = [
        'name'
    ];

    public function vehicles() {
        return $this->hasMany(ModelOfVehicle::class);
    }
}
