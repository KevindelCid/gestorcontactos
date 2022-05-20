<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Workers;


class LlsController extends Controller
{


function listar(){
    return Workers::all();
}

    public function worker_insert(Request $request)
    {
        $DateAndTime = date('m-d-Y h:i:s a', time());  
        $validator = Validator::make($request->all(), [
            'correlativo' => '',
            'nombre_trabajador' => 'required',
            'sexo' => 'required',
            'dpi' => 'required',
            'departamento' => '',
            'municipio' => '',
            'aldea_barrio_ref' => '',
            'telefonos' => 'required',
            'pasaporte_vigente' => 'required',
            'esquema_vacunas' => 'required',
            'ingreso' => 'required',
            'pago' => '',
            'estado' => '',
            'nota' => '',
            'modificacion'=> '',
            'fecha_ingreso' =>'',
            
        ]); 


        
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }

        
        $trabajador = Workers::create(array_merge(
            $validator->validate(),
             ['modificacion' => $DateAndTime,], ['correlativo' => 55,]
             

            // ['id_usuario' => auth()->user()->id_usuario)]
        ));
        // if(auth()->user() == null){
        //     return response()->json([
        //         'message' => '¡Token invalido!',
                
        //     ], 202);
        // }

        return response()->json([
            'message' => '¡Worker registrado exitosamente!',
            'user' => $trabajador
        ], 201);
    }
}
