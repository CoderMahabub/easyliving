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


    function edit($price_id){
        $single_price = Pricelist::find($price_id);
        return view('backendpages.pricelist.edit',compact('single_price'));
    } 


    function update(Request $request)
    {
        Pricelist::find($request->price_id)->update([
            'sub_service_name'=>$request->sub_service_name,
            'sub_service_price'=>$request->sub_service_price,
            'updated_at'=>Carbon::now(),
        ]);
        Alert::toast('PriceList Updated Successfully', 'success');
        return redirect('/admin/add-price');
    }

    function delete($price_id){
        $single_price = Pricelist::find($price_id)->delete();
        Alert::toast('PriceList Deleted Successfully', 'success');
        return back();
    } 

}
