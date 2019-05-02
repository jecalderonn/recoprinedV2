<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prorroga extends Model
{
    //
     protected $table ="prorroga";
    protected $fillable = ['cod','descripcion','proyecto_codigo'];
}
