<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegatinas extends Model
{
    protected $fillable = ['id', 'idCliente', 'idProducto', 'dosis', 'fechaDesde', 'fechaHasta'];
}
