<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnosis extends Model
{
    protected $table = 'diagnosis';
    protected $fillable = ['id', 'idCliente', 'idEspecie', 'zonaTratada','fecha']; 
}
