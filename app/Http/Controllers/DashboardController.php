<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\User;

class DashboardController extends Controller
{

function __construct()
{
    $this->middleware('auth');
}

    function index(){
        return view('backendpages.dashboardhome.index');
    }

    function employee_orders(){
        $reservations =Reservation::latest()->paginate(5);
        $deleted_reservations = Reservation::onlyTrashed()->paginate(3);
        return view('backendpages.employee.employee_orders',compact('reservations','deleted_reservations'));
    }






    function customer_orders(){
        $reservations =Reservation::latest()->paginate(5);
        $deleted_reservations = Reservation::onlyTrashed()->paginate(3);
        return view('backendpages.customer.customer_orders',compact('reservations','deleted_reservations'));
    }




    function profile(){
        return view('backendpages.profile.profile');
    }
}
