<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutus;
use Carbon\Carbon;
Use Alert;


class AboutusController extends Controller
{
    //index
    function index(){
        $aboutuses = Aboutus::all();
        return view('backendpages.aboutpage.index',compact('aboutuses'));
    }



    //create
    function create(Request $request){
        Aboutus::insert([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),

        ]);
        Alert::toast('Success Submited', 'Success');

        return back();
    }


    //end
}
