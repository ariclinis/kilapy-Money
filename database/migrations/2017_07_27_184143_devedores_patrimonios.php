<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DevedoresPatrimonios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devedores_patrimonios', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('devedore_id')->unsigned();
            $table->foreign('devedore_id')->references('id')->on('devedores');
            $table->integer('patrimgarantia_id')->unsigned();
            $table->foreign('patrimgarantia_id')->references('id')->on('patrimgarantias');
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
