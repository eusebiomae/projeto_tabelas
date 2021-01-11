<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatoIdiomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_idiomas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_idioma', 50);
            $table->enum('nivel', ['basico', 'basico a intermediario', 'intermediario', 'avançado', 'fluente ou nativo']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidato_idiomas');
    }
}
