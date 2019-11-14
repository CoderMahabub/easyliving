<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricelist extends Model
{
    protected $fillable=[
        'sub_service_name',
        'sub_service_price',
    ];
}
