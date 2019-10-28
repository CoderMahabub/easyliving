<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
Use App\role;

class UserController extends Controller
{
    function index(){
       $users = User::all();
       //echo $users;
        return view('backendpages.userpage.index',compact('users'));
    }

}
