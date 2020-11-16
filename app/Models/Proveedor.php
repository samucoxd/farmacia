<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'country_id'];

    //Relacion uno a muchos
    public function articulos(){
        return $this->hasMany(Articulo::class);
    }

    //Relacion uno a Muchos inversa
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
