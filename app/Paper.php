<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    //

    protected $fillable = [

        'titulo', 'codigo', 'año', 'photo_id','titles_idtitles', 'teachers_idteachers', 

    ];

    public function title(){

        return $this->belongsTo('App\Title', 'titles_idtitles', 'id');

    }

    public function author(){

        return $this->belongsTo('App\Author');

    }

    public function teacher(){

        return $this->belongsTo('App\Teacher', 'teachers_idteachers', 'id');

    }

    public function photo(){


        return $this->belongsTo('App\Photo');


    }
}
