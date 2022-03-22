<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
  public function creater(){
    return $this->belongsTo('App\User' ,'creator');
  }
}
