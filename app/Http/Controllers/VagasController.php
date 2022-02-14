<?php


namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;

class VagasController extends Controller{

    public function create_vaga(Request $req){

        $model = Vaga::create([
            'empresa' => $req->empresa,
            'titulo' => $req->titulo,
            'descricao' => $req->descricao,
            'nivel' => $req->nivel,
            'localizacao' => strtoupper($req->localizacao)
            ]
        );

        return response()->json(['Vaga' => $model], 201);  
    }
    public function show(){
        $vagas = Vaga::all();

        return response()->json($vagas, 200);
        
    }
}