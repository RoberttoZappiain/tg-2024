<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $table = 'familias';

    // Relación de familia con categorías
    public function categorias()
    {
        return $this->hasMany(Categoria::class, 'familia_id');
    }

    // Relación de familia con productos a través de subcategorías y categorías
    public function productos()
    {
        return $this->hasManyThrough(
            Producto::class,           // El modelo destino
            Subcategoria::class,       // El modelo intermedio
            'categoria_id',            // Clave foránea en 'subcategorias'
            'subcategoria_id',         // Clave foránea en 'productos'
            'id',                      // Clave primaria en 'familias'
            'id'                       // Clave primaria en 'subcategorias'
        );
    }
}
