<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProcessamentosCredores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processamentos_credores', function(Blueprint $table)
        {
            $table->increments('id', true);
            $table->integer('credore_id')->unsigned();
            $table->foreign('credore_id')->references('id')->on('credores');
            $table->double('valor_investir');
            $table->string('finalidade', 200);
            $table->string('tempo_invest', 200);
            $table->double('taxa');
            $table->double('juros');
            $table->double('total_receber');
            $table->date('data_processamento');
            $table->date('data_deposito');
            $table->string('estado_processamento', 30);
            $table->date('data_avaliacao');
            $table->date('data_fim_avaliação');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
