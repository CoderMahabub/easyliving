<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignOrderController extends Controller
{
    public function index(){
        return view('backendpages.assignorder.index');
    }
}
