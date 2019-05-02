<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    //
     protected $table ="proyecto";
    protected $fillable = ['codigo','titulo','rama', 'facultad_codigo', 'proyecto','investigador_codigo', 'docente_codigo','jurado_codigo'];
}
