<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
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
