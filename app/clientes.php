<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['id', 'razonSocial', 'personaContacto', 'cif','telefono','direccion','localidad','provincia'];
    
    public function trabajos(){
        return $this->hasMany(trabajos::class);
    }
}