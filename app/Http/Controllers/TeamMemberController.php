<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\TeamMember;
Use Alert;
Use Image;

class TeamMemberController extends Controller
{
    function index(){
        $teammembers = TeamMember::all();
        return view('backendpages.teammember.index',compact('teammembers'));
    }

    function create(Request $request){
        $validatedData = $request->validate([
            'member_photo' => 'required',
            'member_name' => 'required|min:3|max:25',
            'designation' => 'required|min:3|max:25',
            'detail' => 'required|min:3|max:250',
        ]);

        $last_inserted_id = TeamMember::insertGetId([
            'member_photo' =>$request ->member_photo,
            'member_name' =>$request ->member_name,
            'designation' =>$request ->designation,
            'detail' =>$request ->detail,
            'facebook_link' =>$request ->facebook_link,
            'twitter_link' =>$request ->twitter_link,
            'linkedin_link' =>$request ->linkedin_link,
        ]);

            // photo upload

   if ($request->hasFile('member_photo')) {
	$photo_upload     =  $request ->member_photo;
	$photo_extension  =  $photo_upload -> getClientOriginalExtension();
	$photo_name       =  $last_inserted_id . "." . $photo_extension;
	Image::make($photo_upload)->resize(360,360)->save(base_path('public/uploads/team_members/'.$photo_name),100);
	TeamMember::find($last_inserted_id)->update([
	'member_photo'          => $photo_name,
      ]);
      }
        Alert::toast('Successfully Added Team Member', 'success');
        return back();
    }
    //end
}
