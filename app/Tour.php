<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    protected $fillable = [
        'name',
        'price',
        'category',
        'overview',
        'activity',
        'exclusion',
        'inclusion',
        'policies',
        'guide_id',
        'province_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function tourImages(){
        return $this -> hasMany('App\TourImage');
    }
    public function bookings(){
        return $this -> hasMany('App\Booking');
    }
    public function reviews(){
        return $this -> hasMany('App\Review');
    }
    public function guide(){
        return $this -> belongsTo('App\User');
    }
    public function province(){
        return $this -> belongsTo('App\Province');
    }
    public function latestTourImage(){
        return $this->hasOne('App\TourImage')->latest();
    }
}
