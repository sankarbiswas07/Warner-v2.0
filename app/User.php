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
        'name', 'email', 'password','roll',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function feeds(){
        return $this->hasMany('App\Feed');
    }
    public function blogs(){
        return $this->hasMany('App\Blog');
    }
    public function mentor(){
        return $this->belongsTo('App\Mentor');
    }

}
