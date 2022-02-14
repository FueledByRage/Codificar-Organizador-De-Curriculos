<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VagaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create("Vaga", function(Blueprint $table){
            $table->id();
            $table->string(column: 'empresa');
            $table->string(column: 'titulo');
            $table->string(column: 'descricao');
            $table->string(column: 'localizacao');
            $table->integer(column: 'nivel');
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
