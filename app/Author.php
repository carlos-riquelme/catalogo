<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $fillable = [
            'nombre', 'apellidos',
    ];

    public function paper(){

        return $this->hasMany('App\Paper');

    }
}
