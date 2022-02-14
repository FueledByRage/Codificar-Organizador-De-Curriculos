<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vaga extends Model{

    use HasFactory;

    protected $table = 'Vaga';
    public $timestamps = false;

    protected $fillable = [
        'empresa',
        'titulo',
        'descricao',
        'localizacao',
        'nivel'
    ];

}