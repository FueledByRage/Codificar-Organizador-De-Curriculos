<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidatura extends Model{

    use HasFactory;

    protected $table = 'Candidatura';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'profissao',
        'localizacao',
        'nivel',
        'vaga_id',
        'candidato_id',
        'score'
    ];

}