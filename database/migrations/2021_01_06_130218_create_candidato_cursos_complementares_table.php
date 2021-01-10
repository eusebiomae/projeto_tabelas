<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatoCursosComplementaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_cursos_complementares', function (Blueprint $table) {
            $table->id();
            $table->string('instituiçao', 150);
            $table->string('curso', 150);
            $table->string('tipo curso', 150);
            $table->string('area estudo', 150);
            $table->text('carga horaria', 150);
            $table->date('data inicio', 150);
            $table->date('data termino', 150)->nullable();
            $table->text('desc', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidato_cursos_complementares');
    }
}
