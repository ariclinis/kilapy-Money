<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Devedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('devedores', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('dados_comun_id')->unsigned();
            $table->foreign('dados_comun_id')->references('id')->on('dados_comuns');
            $table->text('doc_residencia', 65535);
            $table->text('doc_recibomensal', 65535);
            $table->text('rendamensal', 65535);
            $table->string('ocupacao', 40);
            $table->text('bancorenda', 65535);
            $table->text('doc_escolaridade', 65535);
            $table->string('desc_escolaridade', 40);
            $table->text('profissao', 65535);
            $table->string('desc_profissao');
            $table->text('empresa', 65535);
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
