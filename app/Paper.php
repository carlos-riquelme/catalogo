<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    //

    public function title(){

        return $this->hasOne('App\Title');

    }
}
