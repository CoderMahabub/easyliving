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
        Alert::toast('Role Added Successfully','success');
        return back();
    }
}
