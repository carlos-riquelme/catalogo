<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = [

        'nombre', 'tipo'

    ];

    public function title(){

        return $this->hasMany('App\Title');

    }
}
