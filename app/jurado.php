<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurado extends Model
{
    //
     protected $table ="jurado";
    protected $fillable = ['codigo','documento','nombre','direccion', 'fecha_nacimiento'];
}
