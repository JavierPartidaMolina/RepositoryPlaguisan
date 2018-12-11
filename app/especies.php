<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especies extends Model
{
    protected $table = 'especies';
    protected $fillable = ['id', 'nombreCientifico', 'nombreVulgar', 'tipo'];
}
