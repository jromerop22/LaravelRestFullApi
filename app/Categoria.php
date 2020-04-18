<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';

    //relacion de uno a muchos
    public function Contenido(){
        return $this->hasMany('App\Contenido');
    }
}
