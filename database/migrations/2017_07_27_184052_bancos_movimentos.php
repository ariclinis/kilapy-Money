<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BancosMovimentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::create('bancos_movimentos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('banco_id')->unsigned();
            $table->foreign('banco_id')->references('id')->on('bancos');
            $table->string('n_conta', 250);
            $table->string('agencia', 250);
            $table->integer('devedore_id')->unsigned();
            $table->foreign('devedore_id')->references('id')->on('devedores');
            $table->integer('credore_id')->unsigned();
            $table->foreign('credore_id')->references('id')->on('credores');
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
