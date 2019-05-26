<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;

// Ovu će nam klasu extendati samo oni kontroleri koji su za api dio
class ApiController extends Controller
{
    use ApiResponser;
}
