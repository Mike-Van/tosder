<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_email',
        'trip_date',
        'pick_up',
        'grand_total',
        'status',
        'tour_id',
        'guide_id'
    ];
}
