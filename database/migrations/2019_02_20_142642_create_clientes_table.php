<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('idclientes');
            $table->string('fantasia');
            $table->string('razaosocial')->nullable();
            $table->string('cnpj');
            $table->string('inscricaoestadual')->nullable();
            $table->string('website')->nullable();
            $table->string('fkresponsavel')->nullable();
            $table->string('fksegmento')->nullable();
            $table->string('fkorigem')->nullable();
            $table->string('situacao')->nullable();
            $table->string('observacao')->nullable();
            $table->string('endereco')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cep')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('pais')->nullable();
            $table->string('icms')->nullable();
            $table->string('pis')->nullable();
            $table->string('cofins')->nullable();
            $table->string('iss')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
