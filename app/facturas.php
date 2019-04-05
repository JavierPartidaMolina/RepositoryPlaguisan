<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facturas extends Model
{
    protected $table = 'facturas';
    protected $fillable = ['id', 'idCliente', 'descripcion', 'precio', 'descripcion'];
}
