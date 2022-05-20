<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contacto;


class ContactosController extends Controller
{

function listar(){

    return Contacto::all();
}

    public function Contactosinsert(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => '',
            'telefono' => '',
            'id_usuario' => '0',
            
            
        ]); 


        
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }

        
        $contacto = Contacto::create(array_merge(
            $validator->validate(),
             ['id_usuario' => 1,]
            //  ['id_usuario' => auth()->user()->id,]
            
        ));
        // if(auth()->user() == null){
        //     return response()->json([
        //         'message' => '¡Token invalido!',
                
        //     ], 202);
        // }

        return response()->json([
            'message' => '¡Contacto registrado exitosamente!',
            'user' => $contacto
        ], 201);
    }
}
