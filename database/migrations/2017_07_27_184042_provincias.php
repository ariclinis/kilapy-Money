<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Provincias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincias', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cod_provincia', 100);
            $table->string('des_provincia', 100);
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('tbl_estados');
            $table->string('pais', 50);
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
