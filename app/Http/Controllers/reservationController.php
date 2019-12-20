<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Alert;
use DB;

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
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone_number'=>$request->phone_number,
            'client_email'=>$request->client_email,
            'client_address'=>$request->client_address,
            'client_sub_district'=>$request->client_sub_district,
            'client_district'=>$request->client_district,
            'status'=>$request->status1,
            'employee_id'=>$request->employee_id,
            ]);
        return redirect()->route('dashboard');
    }
    function delete($reservation_id){
        Reservation::find($reservation_id)->delete();
        Alert::toast('Order Delivered to Customer Successfully','success');
        return back();
    }
    
    function restore($reservation_id){
        Reservation::onlyTrashed()->where('id',$reservation_id)->restore();
        Alert::toast('Placed Previous Ordered Again','success');
        return back();
    }


//end
}
