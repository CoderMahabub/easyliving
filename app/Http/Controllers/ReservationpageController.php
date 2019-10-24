<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationpageController extends Controller
{
    public function index(){
        return view('frontendpages.reservationpage.index');
    }
    
}
