<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Validator;

use App\Contenido;


class ContenidosController extends Controller
{
    public $timestamps = false;

    public function ListarAll(){
        $params = Contenido::find();
        $data = array(
            'status' =>'ok',
            'code' => 200,
            'message' => 'Seleccionado correctamente',
            'data' => $params
        );
        return response()->json($data,$data['code']);
    }

    public function Crear(Request $res){

        $json = json_decode($res->getContent(),true);

        $validar = Validator($json,[
            'nombre'=>'required|string',
            'director'=>'required|string',
            'calificacion'=>'required',
            'idtipo'=>'required|numeric',
            'idcategoria'=>'required|numeric',
        ]);

        if($validar->fails()){
            $data = array(
                'status' =>'error',
                'code' => 404,
                'message' => $validar->errors()
            );
        }else{
            $Contenido = new Contenido();
            $Contenido->nombre = $json['nombre'];
            $Contenido->director = $json['director'];
            $Contenido->calificacion = $json['calificacion'];
            $Contenido->idtipo = $json['idtipo'];
            $Contenido->idcategoria = $json['idcategoria'];

            $Contenido->save();

            $data = array(
                'status' =>'ok',
                'code' => 200,
                'message' => 'creado correctamente'
            );
        }

        return response()->json($data,$data['code']);
    }


    public function Calificar($id, Request $res){
        $json = json_decode($res->getContent(),true);

        $validar = Validator($json,[
            'nombre'=>'required|string',
            'director'=>'required|string',
            'calificacion'=>'required',
            'idtipo'=>'required|numeric',
            'idcategoria'=>'required|numeric',
        ]);

        if($validar->fails()){
            $data = array(
                'status' =>'error',
                'code' => 404,
                'message' => $validar->errors()
            );
        }else{
            unset($json['id']);
            unset($json['nombre']);
            unset($json['idtipo']);
            unset($json['idcategoria']);
            unset($json['created_at']);
            unset($json['updated_at']);

            $Contenido = Contenido::where('idcontenido',$id)->update($json);

            $data = array(
                'status' =>'ok',
                'code' => 200,
                'message' => 'calificado correctamente',
                'data' => $Contenido
            );
        }

        return response()->json($data,$data['code']);
    }
    public function Editar($id, Request $res){
        $json = json_decode($res->getContent(),true);

        $validar = Validator($json,[
            'nombre'=>'required|string',
            'director'=>'required|string',
            'calificacion'=>'required',
            'idtipo'=>'required|numeric',
            'idcategoria'=>'required|numeric',
        ]);

        if($validar->fails()){
            $data = array(
                'status' =>'error',
                'code' => 404,
                'message' => $validar->errors()
            );
        }else{
            unset($json['id']);
            unset($json['created_at']);

            $Contenido = Contenido::where('idcontenido',$id)->update($json);

            $data = array(
                'status' =>'ok',
                'code' => 200,
                'message' => 'Actualizado correctamente',
                'data' => $Contenido
            );
        }

        return response()->json($data,$data['code']);
    }

    public function Eliminar($idcontenido, Request $res){

        $param = Contenido::find($idcontenido);

        if(!empty($param)){
            $param->delete();
            $data = array(
                'status' =>'ok',
                'code' => 200,
                'message' => 'Eliminado correctamente',
                'data'=> $param
            );
        }else{
            $data = array(
                'status' =>'error',
                'code' => 404,
                'message' => "no se encuentra el id solicitado"
            );
        }

        return response()->json($data,$data['code']);
    }

    public function ListarCategoria($id ,Request $res){
        $params = Contenido::where('idcategoria',$id)->get();
        $data = array(
            'status' =>'ok',
            'code' => 200,
            'message' => 'Seleccionado correctamente',
            'data' => $params
        );
        return response()->json($data,$data['code']);
    }

    public function ListarRecientes(Request $res){
        $params = Contenido::where('created_at', '>=', Carbon::today())->get();
        $data = array(
            'status' =>'ok',
            'code' => 200,
            'message' => 'Seleccionado correctamente',
            'data' => $params
        );
        return response()->json($data,$data['code']);
    }

    public function ListarCalificada(Request $res){
        $params = Contenido::where('calificacion', '>=', '3')->get();
        $data = array(
            'status' =>'ok',
            'code' => 200,
            'message' => 'Seleccionado correctamente',
            'data' => $params
        );
        return response()->json($data,$data['code']);
    }

    public function ListarNombre($nombre){
        $params = Contenido::where('nombre',$nombre)->get();
        $data = array(
            'status' =>'ok',
            'code' => 200,
            'message' => 'Seleccionado correctamente',
            'data' => $params
        );
        return response()->json($data,$data['code']);
    }
}
