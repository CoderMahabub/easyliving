<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqpageController extends Controller
{
    public function index(){
        return view('frontendpages.faqpage.index');
    }
}
