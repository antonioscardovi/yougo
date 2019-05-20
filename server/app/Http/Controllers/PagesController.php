<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login() {
        return view('projects.login');
    }

    public function index() {
        return view('projects.dashboard');
    }
}

