<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatoExperienciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_experiencia', function (Blueprint $table) {
            $table->id();
            $table->string('cargo', 50);
            $table->string('tipo_emprego', 50);
            $table->string('empresa', 150);
            $table->string('localidade', 150);
            $table->boolean('cargo atual')->nullable(); //para confirmar se é ou não o cargo atual
            $table->date('data inicio');
            $table->date('data termino')->nullable();
            $table->text('desc', 450)->nullable();
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
        Schema::dropIfExists('candidato_experiencia');
    }
}
