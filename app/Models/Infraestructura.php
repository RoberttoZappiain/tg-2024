<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraestructura extends Model
{
    use HasFactory;
    protected $table = 'infraestructura'; // Nombre de la tabla en la base de datos
    protected $connection = 'mysql2'; // nombre de la conexión definida en config/database.php

}
