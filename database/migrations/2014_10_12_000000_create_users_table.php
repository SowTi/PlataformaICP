<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Executa a Migração.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');                 //ID
            $table->string('name');                   //Nome
            $table->string('email')->unique();        //Email
            $table->string('password');               //Senha
            $table->string('token');                  //Token
            $table->string('active')->default(1);     //Ativo
            $table->rememberToken();                  //Token de Recuperação.
        });
    }

    /**
     * Desfaz a Migração.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
