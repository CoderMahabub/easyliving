<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicepageController extends Controller
{
    public function index(){
        return view('frontendpages.servicepage.index');
    }
}
