<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesolarpageCotroller extends Controller
{
    public function servicesolar(){
        return view('frontendpages.servicedetailpage.servicesolar');
    }
}
