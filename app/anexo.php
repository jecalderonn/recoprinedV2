<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anexo extends Model
{
    //

     protected $table ="anexo";
    protected $fillable = ['codigo','fecha','descripcion', 'proyecto_codigo', 'anexo'];
    
}
