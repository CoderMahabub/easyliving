<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceinteriorpageController extends Controller
{
    public function serviceinterior(){
        return view('frontendpages.servicedetailpage.serviceinterior');
    }
}
