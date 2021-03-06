<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','lastname','age'];

    public function assignments(){
      return $this->hasMany('App\Assignment');
    }
}
