<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlmoxarifadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almoxarifados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('responsavel'); /* Responsável pelo Almoxarifado */
            $table->string('identificador'); /* Identificador único de Almoxarifado*/
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
        Schema::drop('almoxarifados');
    }
}
