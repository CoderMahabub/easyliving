<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricelist;
use Carbon\Carbon;
use Alert;

class PricelistController extends Controller
{
    function index(){
        $price_lists = Pricelist::all();
        return view('backendpages.pricelist.index',compact('price_lists'));
    }
    function create(Request $request){
        Pricelist::insert([
            'sub_service_name'=>$request->sub_service_name,
            'sub_service_price'=>$request->sub_service_price,
            'created_at'=>Carbon::now(),
        ]);
        Alert::toast('Pricelist Added Successfully','success');
        return back();
    }
    
}
