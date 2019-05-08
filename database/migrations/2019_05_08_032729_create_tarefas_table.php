<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->boolean('privacidade');
            $table->string('descricao');
            $table->boolean('status');
            $table->date('data');
            $table->integer('id_tipo')->unsigned();
            $table->foreign('id_tipo')->references('tipos')->on('id');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('users')->on('id');
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
        Schema::dropIfExists('tarefas');
    }
}
