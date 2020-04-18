<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoContenido extends Model
{
    protected $table = 'tipocontenido';

    //relacion de uno a muchos
    public function Contenido(){
        return $this->hasMany('App\Contenido');
    }
}
