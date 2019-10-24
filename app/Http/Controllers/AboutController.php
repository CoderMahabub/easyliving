<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutus;

class AboutController extends Controller
{
    public function index(){
        $aboutuses = Aboutus::all();
        return view('frontendpages.aboutpage.index',compact('aboutuses'));
    }
}
