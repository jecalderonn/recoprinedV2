<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
    //
    protected $table ="docente";
    protected $fillable = ['codigo','nombre','direccion', 'fecha_nacimiento', 'programa_codigo'];
}
