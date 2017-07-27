<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bairros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    Schema::create('bairros', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cod_bairro', 100)->unique();
            $table->string('discricao_dairro', 100);
            $table->string('municipio_id', 100);
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('tbl_estados');
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
