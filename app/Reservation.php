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
            'first_name',
            'last_name',
            'client_email',
            'password',
            'client_address',
            'status',
            'employee_id',
            'district',
            'thana',
            'client_id',
    ];

    function relationBetweenPrice(){
        return $this->hasOne('App\Pricelist','id','service_price_id');
    }
    
}
