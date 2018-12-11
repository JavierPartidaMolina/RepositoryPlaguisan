<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->unsignedInteger('idCliente');
            $table->foreign('idCliente')->references('id')->on('clientes');
            $table->unsignedInteger('idFactura');
            $table->foreign('idFactura')->references('id')->on('facturas');
            $table->unsignedInteger('idDiagnosis');
            $table->foreign('idDiagnosis')->references('id')->on('diagnoses');
            $table->unsignedInteger('idCertificado');
            $table->foreign('idCertificado')->references('id')->on('certificados');
            $table->unsignedInteger('idContrato');
            $table->foreign('idContrato')->references('id')->on('contratos');
            $table->unsignedInteger('idPegatina');
            $table->foreign('idPegatina')->references('id')->on('pegatinas');
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
        Schema::dropIfExists('trabajos');
    }
}
