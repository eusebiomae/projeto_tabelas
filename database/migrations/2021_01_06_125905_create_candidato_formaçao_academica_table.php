<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatoExperienciaTipoEmpregoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_formaçao_academica', function (Blueprint $table) {
            $table->id();
            $table->string('instituiçao_ensino', 100);
            $table->string('formaçao', 100);
            $table->string('area_estudo', 100);
            $table->date('ano_inicio', 100);
            $table->date('ano_termino', 100)->nullable();
            $table->text('desc', 250);
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
        Schema::dropIfExists('candidato_formaçao_academica');
    }
}

