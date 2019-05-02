<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupoInvestigador extends Model
{
    //
    protected $table ="grupo_investigador";
    protected $fillable = ['codigo','nombre','programa_codigo'];
}
