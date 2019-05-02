<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class investigador extends Model
{
    //
    protected $table ="investigador";
    protected $fillable = ['codigo','nombre','documento','direccion','facultad','programa'];
}
