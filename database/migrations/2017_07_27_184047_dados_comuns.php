<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DadosComuns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dados_comuns', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nome', 100);
            $table->date('data_nasc');
            $table->integer('idade');
            $table->enum('genero', ['Masculino', 'Femenino']);
            $table->string('nacionalidade', 40);
            $table->enum('estado_civil', ['Solteiro/a', 'Casado/a','Divorciado/a','Vivu/a']);
            $table->string('n_bi', 40)->unique();
            $table->string('nif', 40);
            $table->text('foto');
            $table->integer('provincia_id')->unsigned();
            $table->foreign('provincia_id')->references('id')->on('provincias');
            $table->date('data_registo');
            $table->integer('contacto_id')->unsigned();
            $table->foreign('contacto_id')->references('id')->on('contactos');
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
