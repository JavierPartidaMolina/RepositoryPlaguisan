<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificados extends Model
{
    protected $table = 'certificados';
    protected $fillable = ['id', 'idCliente', 'idEspecie', 'idTrabajador','idProducto','dosis','fechaDesde','fechaHasta'];
}
