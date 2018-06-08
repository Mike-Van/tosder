<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected $fillable = [
        'name',
        'imgPath'
    ];

    public function tours(){
        return $this -> hasMany('App\Tour');
    }
    public function guides(){
        return $this -> hasMany('App\User');
    }
}
