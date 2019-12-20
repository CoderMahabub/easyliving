<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
Use App\role;
Use Alert;




class UserController extends Controller
{
    function index(){
       $users = User::simplePaginate(4);
       //echo $users;
        return view('backendpages.userpage.index',compact('users'));
    }

     function delete($user_id){
        User::find($user_id)->delete();
        Alert::toast('User Deleted Successfully','success');
         return back();
    }
}
