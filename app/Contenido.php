<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contenido extends Model
{
    protected $table = 'contenido';
    protected $primaryKey = 'idcontenido';

    public function Categoria()
    {
        return $this->belongsTo('App\Categoria','idcategoria');
    }

    public function TipoContenido()
    {
        return $this->belongsTo('App\TipoContenido','idtipo');
    }
}
