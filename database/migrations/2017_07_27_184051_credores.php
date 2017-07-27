<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Credores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    Schema::create('credores', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('dados_comun_id')->unsigned();
            $table->foreign('dados_comun_id')->references('id')->on('dados_comuns');
            $table->string('finalidade', 200);
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
