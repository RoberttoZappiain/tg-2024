<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refrigeracion extends Model
{
    protected $table = 'refrigeracion'; // Nombre de la tabla en la base de datos
    protected $connection = 'mysql2'; // nombre de la conexión definida en config/database.php

    use HasFactory;
}
