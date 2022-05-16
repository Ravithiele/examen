<?php

namespace App\Http\Controllers;

use App\Models\Kamer;
use App\Models\Reservering;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $reserveringen = Reservering::get();
        $kamers = Kamer::get();
        
        return view('dashboard', [
            'reserveringen' => $reserveringen,
            'kamers' => $kamers
        ]);
    }
}
