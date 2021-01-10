<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatoVoluntariadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_voluntariado', function (Blueprint $table) {
            $table->id();
            $table->string('organizaçao', 150)->nullable();
            $table->string('funçao', 150)->nullable();
            $table->string('causa', 150)->nullable();
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
        Schema::dropIfExists('candidato_voluntariado');
    }
}
