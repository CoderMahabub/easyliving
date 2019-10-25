<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Status;
Use Carbon\Carbon;
Use Alert;

class StatusController extends Controller
{
    function index(){
        $statuses =Status::all();
        return view('backendpages.status.index',compact('statuses'));
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

