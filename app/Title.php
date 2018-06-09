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

        return $this->hasMany('App\Paper', 'titles_idtitles', 'id');
        
    }

}
