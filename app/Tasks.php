<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    public function reminders(){
      return $this->belongsTo('App\reminders');
    }
    public function creater(){
      return $this->belongsTo('App\User','creator');
    }
    public function worker(){
      return $this->belongsTo('App\User','assignedTo');
    }
    public function projects(){
      return $this->belongsTo('App\Project','project');
    }
}
