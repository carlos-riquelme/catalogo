<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Author;

class Paper extends Model
{
    //

    protected $fillable = [

        'titulo', 'codigo', 'año', 'photo_id', 'title_id', 'teacher_id'

    ];

    public function title(){

        return $this->belongsTo('App\Title');

    }

    public function authors(){

        return $this->belongsToMany('App\Author')->withTimestamps();

    }

    public function teacher(){

        return $this->belongsTo('App\Teacher');

    }

    public function photo(){


        return $this->belongsTo('App\Photo');


    }
}
