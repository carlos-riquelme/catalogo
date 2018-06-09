<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = [

        'nombre', 'tipo'

    ];

    public function paper(){

        return $this->hasMany('App\Paper', 'teachers_idteachers', 'id');

    }
}
