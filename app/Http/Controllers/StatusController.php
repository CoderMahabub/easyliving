<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Status;
Use Carbon\Carbon;
Use Alert;

class StatusController extends Controller
{
    function index(){
        return view('backendpages.status.index');
    }

    function create(Request $request){
        Status::insert([
            'status_name'=>$request->status_name,
            'created_at'=>Carbon::now(),
        ]);
        Alert::toast('Status Added Successfully','success');
        return back();
    }
}

