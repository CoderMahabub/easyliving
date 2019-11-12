<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;
    protected $fillable=[
            'service',
            'sub_service',
            'service_date',
            'service_time',
            'client_name',
            'client_phone',
            'client_email',
            'password',
            'client_address',
    ];
    
}
