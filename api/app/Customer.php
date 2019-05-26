<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{

    use Notifiable;

    const VERIFIED_CUSTOMER = '1';
    const UNVERIFIED_CUSTOMER = '0';

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

    public function isVerified() {
        return $this->verified == Customer::VERIFIED_CUSTOMER;
    }

    public static function generateVerificationCode() {
        return str_random(40);
    }
}
