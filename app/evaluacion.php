<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evaluacion extends Model
{
    //
    protected $table ="ficha_evaluadora";
    protected $fillable = ['codigo','fecha','proyecto_codigo', 'ficha'];
}
