<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourImage extends Model
{
    //
    protected $fillable = [
        'name',
        'path',
        'tour_id'
    ];
}
