<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proteccion extends Model
{
    use HasFactory;
    protected $connection = 'mysql2'; // nombre de la conexión definida en config/database.php

    protected $table = 'proteccion';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function subcategoria()
    {
        return $this->belongsTo(SubcategoriaProteccion::class, 'subcategoria_id');
    }
}
