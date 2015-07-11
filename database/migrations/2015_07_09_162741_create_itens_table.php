<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens', function (Blueprint $table) {
            $table->increments('id');

            // belongsto setor
            $table->integer('setor_id');
            // belongsto almoxarifado
            $table->integer('almoxarifado_id');            
            $table->string('nome');
            $table->decimal('valor', 5,3);
            $table->integer('quantidade');
            $table->boolean('ativo');
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
        Schema::drop('itens');
    }
}
