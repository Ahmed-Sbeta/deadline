<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Announcment(){
      return $this->hasMany('App\Announcment' ,'creator');
    }
    public function comments(){
      return $this->hasMany('App\comments' ,'creator');
    }
    public function reports(){
      return $this->hasMany('App\reports');
    }
    public function tasks(){
      return $this->hasMany('App\Tasks');
    }
    public function project(){
      return $this->hasMany('App\projects');
    }
    public function events(){
      return $this->hasMany('App\events');
    }
    public function projects(){
      return $this->belongsToMany('App\projects', 'user_project');
    }
    public function email(){
      return $this->belongsToMany('App\email','user_email');
    }


}
