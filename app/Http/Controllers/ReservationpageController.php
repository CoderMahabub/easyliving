<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Alert;
use Carbon\Carbon;

class ReservationpageController extends Controller
{
    public function index(){
        return view('frontendpages.reservationpage.index');
    }
    public function create(Request $request){
        $validatedData = $request->validate([
            'service' => 'required',
            'sub_service' => 'required',
            'service_date' => 'required',
            'service_time' => 'required',
            'client_name' => 'required|min:3|max:25',
            'client_phone' => 'required|numeric',
            'client_email' => 'required|email',
            'password' => 'required',
            'client_address' => 'required',
        ]);
        Reservation::insert([
            'service'=>$request->service,
            'sub_service'=>$request->sub_service,
            'service_date'=>$request->service_date,
            'service_time'=>$request->service_time,
            'client_name'=>$request->client_name,
            'client_phone'=>$request->client_phone,
            'client_email'=>$request->client_email,
            'password'=>$request->password,
            'client_address'=>$request->client_address,            
            'created_at'=>Carbon::now(),
        ]);
        Alert::toast('Your Booking Added Successfully','success');
        return back();
    }
}
