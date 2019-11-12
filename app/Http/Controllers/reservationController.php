<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Alert;

class reservationController extends Controller
{
    function reservation(){
        $reservations =Reservation::latest()->paginate(5);
        $deleted_reservations = Reservation::onlyTrashed()->paginate(3);
        return view('backendpages.reservationView.reservation',compact('reservations','deleted_reservations'));
    }
    function edit($reservation_id){
        $single_reservation = Reservation::find($reservation_id);
        return view('backendpages.reservationView.edit',compact('single_reservation'));
    }
    function update(Request $request){
        Reservation::find($request->reservation_id)->update([
            'service'=>$request->service,
            'sub_service'=>$request->sub_service,
            'service_date'=>$request->service_date,
            'service_time'=>$request->service_time,
            'client_name'=>$request->client_name,
            'client_phone'=>$request->client_phone,
            'client_email'=>$request->client_email,
            'password'=>$request->password,
            'client_address'=>$request->client_address,
        ]);
        return view('backendpages.reservationView.reservation');
    }
    function delete($reservation_id){
        Reservation::find($reservation_id)->delete();
        return back();
    }
    
    function restore(){
       $deleted_reservations = Reservation::onlyTrashed();
       return view('backendpages.reservationView.reservation');
    }



}
