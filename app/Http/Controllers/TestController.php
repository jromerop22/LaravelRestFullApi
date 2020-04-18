<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Contenido;
use App\TipoContenido;

class TestController extends Controller
{
    //funcionalidad
    public function selectCategorias(){
        $Categories = Categoria::all();
        foreach($Categories as $Categorie){
            echo "<h1>".$Categorie ->idcategoria."</h1>";
            echo "<p>".$Categorie ->nombre."</p>";
            echo "<hr>";
        }
        die();
    }

    public function selectTipoContenido(){
        $Tipos = TipoContenido::all();
        foreach($Tipos as $Tipo){
            echo "<h1>".$Tipo ->idtipo."</h1>";
            echo "<p>".$Tipo ->nombre."</p>";
            echo "<hr>";
        }
        die();
    }

    public function selectContenido(){
        $Contenidos = Contenido::all();
        foreach($Contenidos as $Contenido){
            echo "<h1>".$Contenido ->idcontenido."</h1>";
            echo "<p>".$Contenido ->nombre."</p>";
            echo "<p>".$Contenido ->director."</p>";
            echo "<p>".$Contenido ->calificacion."</p>";
            echo "<hr>";
        }
        die();
    }
}
