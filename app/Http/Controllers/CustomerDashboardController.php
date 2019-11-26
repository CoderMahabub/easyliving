<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerDashboardController extends Controller
{
    public function index(){
        return view('backendpages.customerDashboard.index');
    }
}
