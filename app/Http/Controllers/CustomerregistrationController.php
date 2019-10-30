<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Carbon\Carbon;
Use Alert;
Use Image;


class CustomerregistrationController extends Controller
{
    public function index(){
        return view('authentication.registrationpage');
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'telephone_number' => 'required',
            'address' => 'required',
            'user_photo' => 'required',
        ]);

        $last_inserted_id =User::insertGetId([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            //'password'=>Hash::make($request->password),
            'telephone_number'=>$request->telephone_number,
            'address'=>$request->address,
            'district'=>$request->district,
            'thana'=>$request->thana,
            'user_photo'=>$request->user_photo,
            'created_at'=>Carbon::now(),
            //'role_id'=>1,
        ]);

        
        // echo $last_inserted_id;

        // photo upload

        if ($request->hasFile('user_photo')) {
            $photo_upload     =  $request->user_photo;
            $photo_extension  =  $photo_upload->getClientOriginalExtension();
            $photo_name       =  $last_inserted_id . "." . $photo_extension;
            Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/users/'.$photo_name),100);
            User::find($last_inserted_id)->update([
            'user_photo'          => $photo_name,
              ]);
              }

        Alert::toast('Registration Completed Successfully', 'success');
        return back();
    }






    //end
}
