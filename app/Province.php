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

    public function users(){
        return $this->hasMany('App\User');
    }
    public function tours(){
        return $this -> hasMany('App\Tour');
    }
}
