<?php


namespace App\Http\Controllers;

use App\Models\Candidatura;
use Illuminate\Http\Request;
use App\Models\Vaga;
use App\Models\Candidato;

const distancias = [
    'A'=>[
        'A' => 0,
        'B'=>5,
        'C'=>12,
        'D'=>8,
        'E'=>16,
        'F'=>16
    ],
    'B'=>[
        'B' => 0,
        'C'=>7,
        'D' =>3,
        'E'=>11,
        'F'=>11
    ],
    'C'=>[
        'C' => 0,
        'D' =>10,
        'E'=>4,
        'F'=>18
    ],
    'D' =>[
        'D'=> 0,
        'E'=>10,
        'F'=>8
    ],
    'E'=>[
        'E'=> 0,
        'F'=>2
    ],
];

class CandidaturasController extends Controller{

    public function create_candidatura(Request $req){
        $candidato = Candidato::find($req->candidato_id);
        $vaga = Vaga::find($req->vaga_id);

        if(!$candidato || !$vaga) return response('Error finding data', 404);

        $model = Candidatura::create([
            'nome' => $candidato->nome,
            'profissao' => $candidato->profissao,
            'nivel' => $candidato->nivel,
            'localizacao' => $candidato->localizacao,
            'vaga_id' => $req->vaga_id,
            'candidato_id' => $req->candidato_id,
            'score' => $this->get_score($candidato, $vaga)
            ]
        );
        return response()->json(['Candidatura' => $model], 201);  
    }
    private function get_score($candidato, $vaga){
        $N = (100 - 25) * (abs($vaga->nivel - $candidato->nivel));
        $D = $this->getD($candidato->localizacao, $vaga->localizacao);
        $score = ($N + $D) / 2;
        return round($score);
    }
    private function getD($candidatoLocalizacao, $vagaLocalizacao){

        $D;
        if(array_key_exists($candidatoLocalizacao, distancias) &&
        array_key_exists($vagaLocalizacao, distancias[$candidatoLocalizacao])){
           $D = distancias[$candidatoLocalizacao][$vagaLocalizacao];
        }else{
            $D = distancias[$vagaLocalizacao][$candidatoLocalizacao];
        }
        return $D;
    }
    public function ranking($id){

        $result = Candidatura::where('vaga_id', intval($id))->orderBy('score')->get();

        return response()->json(['Response'=>$result], 200);
    }
}