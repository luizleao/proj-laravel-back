<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //'id', 'login', 'senha', 'nome', 'ativo', 'grupo'

        Schema::create('Usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login');
            $table->string('senha');
            $table->string('nome');
            $table->boolean('ativo');
            $table->enum('grupo', ['ADMIN', 'USUARIO']);
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
        Schema::dropIfExists('Usuario');
    }
}