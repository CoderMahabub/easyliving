<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;

class UserController extends Controller
{
    function index(){
       $users = User::all();
       //echo $users;
        return view('backendpages.userpage.index',compact('users'));
    }
    
}
