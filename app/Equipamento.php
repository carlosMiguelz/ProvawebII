<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $table = "equipamento";

    protected $fillable = ['nome','tipo'];

    
}
