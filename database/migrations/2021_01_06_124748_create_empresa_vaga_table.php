<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaVagaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_vaga', function (Blueprint $table) {
            $table->id();
            $table->text('desc', 450)->nullable();
            $table->string('job_type', 250)->nullable();
            $table->string('area', 450)->nullable();
            $table->string('responsability', 250)->nullable();
            $table->string('quali', 450)->nullable();
            $table->string('diferential', 450)->nullable();
            $table->string('requirement', 450)->nullable();
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
        Schema::dropIfExists('empresa_vaga');
    }
}
