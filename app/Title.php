<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    //
    //Obtiene las tesis asociadas que tiene esta carrera
    protected $fillable = [

        'nombre'

    ];
    
    public function paper(){

        return $this->belongsTo('App\Paper');
        
    }

    public function teacher(){

        return $this->belongsTo('App\Teacher');
        
    }
}
