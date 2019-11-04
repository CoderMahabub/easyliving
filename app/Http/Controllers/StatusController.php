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
    function edit($food_id){
        $single_status=Status::find($food_id);
        return view('backendpages.status.edit',compact('single_status'));
    }
    function update(Request $request){
        Status::find($request->status_id)->update([
            'status_name'=>$request->status_name,
            'updated_at'=>Carbon::now(),
        ]);
        Alert::toast('Status Updated Successfully','success');
        return redirect('/admin/status/');
    }

    function delete($food_id){
        $single_status=Status::find($food_id)->delete();
        Alert::toast('Status Deleted Successfully','success');
        return back();
    }
        
}

