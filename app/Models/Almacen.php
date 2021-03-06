<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'nombre', 'ubicacion'];

        //Relacion uno a muchos
        public function articulo(){
            return $this->hasMany(Articulo::class);
        }
}
