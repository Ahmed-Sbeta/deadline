<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
  public function creater(){
    return $this->belongsTo('App\User','creator');
  }
}
