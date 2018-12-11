<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->unsignedInteger('idCliente');
            $table->foreign('idCliente')->references('id')->on('clientes');
            $table->unsignedInteger('idEspecie');
            $table->foreign('idEspecie')->references('id')->on('especies');
            $table->integer('zonaTratada');
            $table->string('fecha');
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
        Schema::dropIfExists('diagnoses');
    }
}
