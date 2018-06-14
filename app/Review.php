<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        'customer_name',
        'details',
        'rating',
        'tour_id'
    ];

    public function tour(){
        return $this -> belongsTo('App\Tour');
    }
}
