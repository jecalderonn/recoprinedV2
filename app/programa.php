<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programa extends Model
{
    //
     protected $table ="programa";
    protected $fillable = ['codigo','nombre','facultad_codigo'];
}
