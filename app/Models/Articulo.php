<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'descripcion', 'lote', 'vencimiento', 'stock', 'foto', 'categoria_id', 'almacen_id', 'proveedor_id'];

    //Relacion uno a Muchos inversa
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    //Relacion uno a Muchos inversa
    public function almacen(){
        return $this->belongsTo(Almacen::class);
    }

    //Relacion uno a Muchos inversa
    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }

    //Relacion Muchos a Muchos
    public function salidas(){
        return $this->belongsToMany(Salida::class);
    }

    public function ingresos(){
        return $this->belongsToMany(Ingreso::class);
    }

}
