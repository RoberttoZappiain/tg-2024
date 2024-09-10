<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcategoriaProteccion extends Model
{
    use HasFactory;
    protected $connection = 'mysql2'; // Asegúrate de que esta conexión esté configurada correctamente en config/database.php
    protected $table = 'subcategoria_proteccion';
}
