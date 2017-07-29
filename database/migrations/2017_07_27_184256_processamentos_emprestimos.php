<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProcessamentosEmprestimos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processamentos_emprestimos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->date('data_avaliacao');
            $table->string('estado_avaliacao', 100);
            $table->float('valor_desejado');
            $table->string('tempo_apagar', 150);
            $table->string('finalidade', 250);
            $table->float('taxa');
            $table->float('juros');
            $table->float('valor_apagar');
            $table->float('parcelasmes');
            $table->date('data_processamento');
            $table->date('data_pagamento');
            $table->string('estado_pagamento', 100);
            $table->string('estado_emprestimo', 100);
            $table->integer('estado_processamento');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('devedore_id')->unsigned();
            $table->foreign('devedore_id')->references('id')->on('devedores');
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
        //
    }
}
