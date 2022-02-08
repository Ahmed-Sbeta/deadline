<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class email extends Model
{
    public function resevers(){
      return $this->belongsToMany('App\User', 'user_emails' , 'email_id', 'user_id')->withTimestamps();
    }
}
