<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;
use Carbon\Carbon;
use Alert;

class ContactusController extends Controller
{
    //backendviews
        public function messages(){
        $contactuses = Contactus::all();
        return view('backendpages.contactmessages.messages',compact('contactuses'));
    }


    //front-end vies
    public function index(){
        return view('frontendpages.contactpage.index');
    }


    function create(Request $request){
        Contactus::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phno'=>$request->phno,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),
        ]);
        Alert::toast('Message Sent Successfully','success');
        return back();
    }










    //end
}
