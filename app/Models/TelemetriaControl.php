<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TelemetriaControl extends Model
{
    protected $connection = 'mysql2'; // nombre de la conexión definida en config/database.php
    protected $table = 'telemetria_control'; // Nombre de la tabla
}
