<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Paper;

class Author extends Model
{
    //
    protected $fillable = [
            'nombre', 'apellidos', 'paper_id'
    ];

    public function papers(){

        return $this->belongsToMany('App\Paper')->withTimestamps();

    }
}
