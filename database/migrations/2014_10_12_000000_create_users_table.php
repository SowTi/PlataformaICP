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
            $table->increments('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('token');
            $table->string('active')->default(0);
            $table->rememberToken();
            $table->timestamps();
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
