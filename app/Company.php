<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function employees(){
      return $this->hasMany('App\employees');
    }
    public function suscription(){
      return $this->belongsTo('App\Subscription','subscription');
    }
}
