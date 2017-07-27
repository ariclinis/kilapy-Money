<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Patimgarantias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrimgarantias', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('cod_patrimonio', 65535);
            $table->string('desc_patrimonio',250);
            $table->string('estado_conserva', 250);
            $table->double('valor_equivalente');
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
