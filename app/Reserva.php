<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = "reservas";

    protected $fillable = ['inicio_data','fim_data','inicio_horario','fim_horario','equipamento_id','user_id'];

    public function equipamento(){
      return $this->belongsToMany(Equipamento::class);
    }

    public function user(){
      return $this->belongsToMany(User::class);
    }
}
