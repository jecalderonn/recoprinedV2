<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avances extends Model
{
    //
    protected $table ="avances";
    protected $fillable = ['codigo','fecha', 'proyecto_codigo', 'avances'];
}
