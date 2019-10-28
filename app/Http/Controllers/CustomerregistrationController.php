<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Carbon\Carbon;
Use Alert;

class CustomerregistrationController extends Controller
{
    public function index(){
        return view('authentication.registrationpage');
    }

    public function create(Request $request)
    {

        $request->validate([
            'name' =>'required|min:3|max:20',
            'email' =>'required|unique',
            'password' =>'required',
            'telephone_number' =>'required',
            'address' =>'required',

        ]);


        User::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            //'password'=>Hash::make($request->password),
            'telephone_number'=>$request->telephone_number,
            'address'=>$request->address,
            'district'=>$request->district,
            'thana'=>$request->thana,
            'created_at'=>Carbon::now(),
            //'role_id'=>1,

        ]);

        Alert::toast('Registration Done Successfully','success');
        return back();
    }

    //end
}
