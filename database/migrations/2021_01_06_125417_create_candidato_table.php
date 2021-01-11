<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato', function (Blueprint $table) {
            $table->id('candidato');
            $table->string('name', 250)->nullable();
            $table->string('address', 450)->nullable();
            $table->string('address_num', 6)->nullable();
            $table->string('address_neighboard', 250);
            $table->text('address_complement', 250)->nullable();
            $table->string('address_city', 250);
            $table->string('address_uf', 250)->nullable();
            $table->string('dt_nasc', 100);
            $table->string('est_civil', 250);
            $table->string('phone', 20)->nullable();
            $table->string('cellphone', 20)->nullable();
            $table->string('email', 100);
            $table->text('about', 450);
            $table->text('cargo_desejado', 150);
            $table->text('pretençao_salarial', 50);
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
        Schema::dropIfExists('candidato');
    }
}
