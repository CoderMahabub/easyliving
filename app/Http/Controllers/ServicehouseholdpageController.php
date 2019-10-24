<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicehouseholdpageController extends Controller
{
    public function servicehousehold(){
        return view('frontendpages.servicedetailpage.servicehousehold');
    }
}
