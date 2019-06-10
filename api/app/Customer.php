<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable implements JWTSubject
{

    use Notifiable;

    const VERIFIED_CUSTOMER = '1';
    const UNVERIFIED_CUSTOMER = '0';

    protected $guard = 'customers-api';

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastname',
        'username',
        'email',
        'password',
        'verification',
        'verification_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'verification_token'
    ];

    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }

    /*
    public function reservations() {
        return $this->hasMany(Reservation::class);
    }*/

    public function reservations() {
        return $this->hasMany(CustomerVehicle::class);
    }


    public function isVerified() {
        return $this->verified == Customer::VERIFIED_CUSTOMER;
    }

    public static function generateVerificationCode() {
        return str_random(40);
    }

}
