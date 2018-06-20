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

    public function user(){
        return $this->hasMany('App\User');
    }
}
