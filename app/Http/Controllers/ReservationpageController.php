<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\pricelist;
use Alert;
use Carbon\Carbon;

class ReservationpageController extends Controller
{
    public function index(){
        $pricelists = Pricelist::all();
        return view('frontendpages.reservationpage.index',compact('pricelists'));
    }
    public function create(Request $request){
        $validatedData = $request->validate([
            'service' => 'required',
            'sub_service' => 'required',
            'service_date' => 'required',
            'service_time' => 'required',
            'first_name' => 'required|min:3|max:10',
            'last_name' => 'required|min:3|max:10',
            'client_email' => 'required|email',
            'phone_number' => 'required|numeric',
            'client_address' => 'required',
            'client_sub_district' => 'required',
            'client_district' => 'required',
        ]);
        Reservation::insert([
            'service'=>$request->service,
            'sub_service'=>$request->sub_service,
            'service_price_id'=>$request->sub_service,
            'service_date'=>$request->service_date,
            'service_time'=>$request->service_time,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone_number'=>$request->phone_number,
            'client_email'=>$request->client_email,
            'client_address'=>$request->client_address,            
            'client_sub_district'=>$request->client_sub_district,            
            'client_district'=>$request->client_district,            
            'created_at'=>Carbon::now(),
        ]);
        Alert::toast('Booking Added Successfully','success');
        return back();
    }
}
