<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $table = "equipamentos";

    protected $fillable = ['name','equip_tipo'];

    public function equip_tipo(){
      return $this->hasMany(Tipo::class);
 		}
}
