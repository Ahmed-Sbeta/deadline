<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reports extends Model
{
  public function creater(){
    return $this->belongsTo('App\User' ,'creator');
  }
}
