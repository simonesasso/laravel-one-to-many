<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";

    public function tasks()
    {
      return $this->hasMany('App\Task');
    }
    public function locations()
    {
      return $this->belongsToMany('App\Location');
    }
}
