<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactpageController extends Controller
{
   public function index(){
       return view('frontendpages.contactpage.index');
   }
}
