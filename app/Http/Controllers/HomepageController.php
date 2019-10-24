<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('frontendpages.homepage.index');
    }

    public function customer_login(){
        return view('authentication.loginpage');
    }
}
