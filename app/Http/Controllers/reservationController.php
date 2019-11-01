<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class reservationController extends Controller
{
    function reservation(){
        $reservations =Reservation::all();
        return view('backendpages.reservationView.reservation',compact('reservations'));
    }
}
