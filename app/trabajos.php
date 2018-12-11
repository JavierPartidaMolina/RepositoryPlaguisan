<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajos extends Model
{
    protected $table = 'trabajos';
    protected $fillable = [
        'id', 'idCliente', 'idFactura', 'idDiagnosis', 'idCertificado', 'idContrato', 'idPegatina'
    ];
}
