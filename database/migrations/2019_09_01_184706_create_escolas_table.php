<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_aluno',100);
            $table->date('data_nascimento');
            $table->string('serie_ingresso');
            $table->string('rua',120);
            $table->string('bairro',100);
            $table->integer('numero');
            $table->string('complemento',50);
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep',8);
            $table->string('nome_mae',100);
            $table->string('cpf_mae',11);
            $table->string('data_pagamento');
            $table->integer('user_id')->unsigner();            
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
        Schema::dropIfExists('escolas');
    }
}
