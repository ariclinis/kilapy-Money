<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bancos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bancos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cod_banco', 40)->uniqid();
            $table->string('desc_banco', 250)->uniqid();
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('tbl_estados');
            $table->date('data_registo');
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
