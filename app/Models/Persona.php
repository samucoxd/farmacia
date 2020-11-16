<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'fnacimiento', 'carnet', 'foto', 'sexo', 'nacionalidad'];

    //Relacion uno a muchos
    public function ingreso(){
        return $this->hasMany(Ingreso::class);
    }

    //Relacion uno a muchos
    public function salida(){
        return $this->hasMany(Salida::class);
    }
}
