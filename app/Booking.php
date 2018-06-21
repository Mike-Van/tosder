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
        'pax',
        'grand_total',
        'status',
        'tour_id',
        'guide_id'
    ];

    public function tour(){
        return $this -> belongsTo('App\Tour');
    }
    public function user(){
        return $this -> belongsTo('App\User', 'guide_id', 'id');
    }
}