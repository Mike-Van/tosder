<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    protected $fillable = [
        'name',
        'price',
        'overview',
        'activity',
        'exclusion',
        'inclusion',
        'policies',
        'guide_id',
        'province_id'
    ];

    public function reviews(){
        return $this -> hasMany('App\Review');
    }
}
