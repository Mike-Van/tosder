<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imgPath',
        'firstName',
        'lastName',
        'about',
        'email',
        'username',
        'password',
        'role',
        'province_id',
        'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function province(){
        return $this->belongsTo('App\Province');
    }
    public function tours(){
        return $this->hasMany('App\Tour');
    }
    public function bookings(){
        return $this->hasMany('App\Booking');
    }
}
