<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;

    //Relacion Muchos a Muchos
    public function articulos(){
        return $this->belongsToMany(Articulo::class);
    }

    //Relacion uno a Muchos inversa
    public function persona(){
        return $this->belongsTo(Persona::class);
    }
}
