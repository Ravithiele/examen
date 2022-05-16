<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveringController extends Controller
{
    public function index() {
        return view('reservering');
    }
}
