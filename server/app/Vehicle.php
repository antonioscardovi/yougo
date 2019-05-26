<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $primaryKey = 'vehicle_id';
    protected $guarded = [
        //        tu idu polja koja želimo štititi, nismo napisali ništa jer ne štitimo inpute na ovaj način i možemo dodavati projekt!
             ];
}
