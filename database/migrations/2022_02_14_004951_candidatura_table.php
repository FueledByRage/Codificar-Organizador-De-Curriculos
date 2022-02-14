<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CandidaturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Candidatura', function(Blueprint $table){
            $table->id();
            $table->string(column: 'nome');
            $table->string(column: 'profissao');
            $table->string(column: 'localizacao');
            $table->integer(column: 'nivel');
            $table->integer(column: 'score');
            $table->unsignedBigInteger(column: 'vaga_id');
            $table->unsignedBigInteger(column: 'candidato_id');
            $table->foreign('vaga_id')->references('id')->on('Vaga');
            $table->foreign('candidato_id')->references('id')->on('Candidato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
