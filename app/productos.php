<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table = 'productos';
    protected $fillable = ['id', 'nombre', 'materiaActiva', 'numeroRegistroSanitario'];
}
