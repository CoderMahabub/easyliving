<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class reservationController extends Controller
{
    function reservation(){
        $reservations =Reservation::latest()->paginate(5);
        return view('backendpages.reservationView.reservation',compact('reservations'));
    }
}
