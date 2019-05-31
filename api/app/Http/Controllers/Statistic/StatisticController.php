<?php

namespace App\Http\Controllers\Statistic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use App\Vehicle;
use App\CustomerVehicle;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        $vehicles = Vehicle::all();
        $reservations = CustomerVehicle::all();
        return view('pages.statistic', compact('customers', 'vehicles', 'reservations'));
    }
}