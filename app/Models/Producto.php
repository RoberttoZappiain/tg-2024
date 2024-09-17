<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    // Relación con subcategoría
    public function subcategoria()
    {
        return $this->belongsTo(Subcategoria::class, 'subcategoria_id');
    }

    // Relación con variantes (opcional, si es necesario)
    public function variantes()
    {
        return $this->hasMany(Variante::class, 'producto_id');
    }

}
