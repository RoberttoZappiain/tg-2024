<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RespaldoRegulacion extends Model
{
    protected $connection = 'mysql2'; // nombre de la conexión definida en config/database.php
    protected $table = 'respaldo_regulacion'; // Nombre de la tabla en la base de datos
    
}
