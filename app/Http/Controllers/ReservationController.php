<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index() {
        return view('home');
    }

    public function create() {
        return view('reservation');
    }
}
