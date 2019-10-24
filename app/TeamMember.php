<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable=[
        'member_photo',
        'member_name',
        'designation',
        'detail',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
    ];
    
}
