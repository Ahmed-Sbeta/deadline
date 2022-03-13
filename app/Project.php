<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function employees(){
      return $this->hasMany('employees');
    }
    public function workers(){
      return $this->belongsToMany('App\User', 'user_projects' , 'project_id', 'user_id')->withTimestamps();
    }
    public function creater(){
      return $this->belongsTo('App\User','creator');
    }
}
