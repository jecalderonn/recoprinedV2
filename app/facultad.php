<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facultad extends Model
{
    //
    protected $table ="facultad";
    protected $fillable = ['codigo','nombre'];
}
