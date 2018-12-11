<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->unsignedInteger('idCliente');
            $table->foreign('idCliente')->references('id')->on('clientes');
            $table->unsignedInteger('idEspecie');
            $table->foreign('idEspecie')->references('id')->on('especies');
            $table->unsignedInteger('idTrabajador');
            $table->foreign('idTrabajador')->references('id')->on('trabajadores');
            $table->unsignedInteger('idProducto');
            $table->foreign('idProducto')->references('id')->on('productos');
            $table->string('dosis');
            $table->string('zonaTratada');
            $table->string('fechaDesde');
            $table->string('fechaHasta');
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
        Schema::dropIfExists('certificados');
    }
}
