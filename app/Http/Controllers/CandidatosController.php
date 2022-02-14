<?php


namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatosController extends Controller{

    public function create_candidato(Request $req){

        $model = Candidato::create([
            'nome' => $req->nome,
            'profissao' => $req->profissao,
            'nivel' => $req->nivel,
            'localizacao' => strtoupper($req->localizacao)
            ]
        );

        return response()->json(['Candidato' => $model], 201);  
    }
    public function show(){
        $candidatos = Candidato::all();

        return response()->json($candidatos, 200);
    }
}