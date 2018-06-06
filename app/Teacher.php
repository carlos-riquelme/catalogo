<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function title(){

        return $this->hasMany('App\Title');

    }
}
