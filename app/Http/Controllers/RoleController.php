<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Role;
Use Carbon\Carbon;
Use Alert;

class RoleController extends Controller
{
    function index(){
        $roles = Role::all();
        return view('backendpages.role.index',compact('roles'));
    }
    function create(Request $request){
      $validatedData = $request->validate([
        'role_name' => 'required|unique|max:25',
    ]);
        Role::insert([
            'role_name'=>$request->role_name,
            'created_at'=>Carbon::now(),

        ]);
        Alert::toast('Role Added Successfully','success');
        return back();
    }



    //end
}
