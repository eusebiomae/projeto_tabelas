<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->id('empresa');
            $table->string('company_type', 150)->nullable();
            $table->string('fantasy_name', 400)->nullable();
            $table->binary('logo', 450)->nullable();
            $table->string('phone', 150)->nullable();
            $table->string('cellphone', 150)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('email_rh', 150)->nullable();
            $table->string('phone_rh', 150)->nullable();
            $table->string('cellphone_rh', 150)->nullable();
            $table->string('contact_rh', 150)->nullable();
            $table->string('razao_social', 400)->nullable();
            $table->string('cnpj', 14);
            $table->string('ie', 14);
            $table->string('im', 14);
            $table->string('site', 400)->nullable();
            $table->string('address', 400);
            $table->string('address_num', 150)->nullable();
            $table->text('address_complement', 150)->nullable();
            $table->string('address_neighboard', 150);
            $table->string('address_city', 150);
            $table->string('address_uf', 150)->nullable();
            $table->string('ramo_atividade', 150);
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
        Schema::dropIfExists('empresa');
    }
}
