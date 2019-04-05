<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contratos extends Model
{
    protected $table = 'contratos';
    protected $fillable = ['id', 'idCliente', 'precio', 'descripcion'];
    
}
