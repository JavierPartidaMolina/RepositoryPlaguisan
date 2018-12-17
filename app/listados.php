<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listados extends Model
{
    protected $fillable = ['id', 'cliente', 'fecha'];
}
