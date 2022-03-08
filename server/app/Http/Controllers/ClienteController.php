<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function showAll(){
        return response()->json(Cliente::all(),200);
    }



    public function show($id){
        // return response()->json(Cliente::all(),200);
        $cliente = Cliente::find($id);
        if(is_null($cliente)){
            return response()->json(['message'=>'No hay clientes registrados'], 404);
        }
        return response()->json($cliente::find($id),200);
    }



    public function add( Request $request){

        $cliente = Cliente::create($request->all());
        return response($cliente,201);
    }


    public function update( Request $request, $id){

        $cliente = Cliente::find($id);

        if(is_null($cliente)){      
            return response()->json(['message'=>'No hay clientes registrados'], 404);
        }

        $cliente->update($request->all());
        return response($cliente,200);
        
    }

    public function delete( Request $request, $id){
        $cliente = Cliente::find($id);
        if(is_null($cliente)){      
            return response()->json(['message'=>'No hay clientes registrados'], 404);
        }
        $cliente->delete();
        return response()->json(null,201);
    }
}
