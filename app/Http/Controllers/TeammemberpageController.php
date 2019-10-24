<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\TeamMember;

class TeammemberpageController extends Controller
{
    public function index(){
        $team_members = TeamMember::all();
        return view('frontendpages.teammemberpage.index',compact('team_members'));
    }
}
