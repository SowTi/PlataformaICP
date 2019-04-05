<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatoshastelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos_has_telefones', function (Blueprint $table) {
            $table->string('contatos_idcontatos');
            $table->string('telefones_idtelefones');
            $table->string('telefones_tipotelefone_idtipotelefone');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos_has_telefones');
    }
}
