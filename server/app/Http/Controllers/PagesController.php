<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function vehicles(){
        return view('vehicles');
    }

    public function login(){
        return view('login');
    }

    public function registration(){
        return view('registration');
    }

    public function dashboard(){
        return view('dashboard');
    }
}
