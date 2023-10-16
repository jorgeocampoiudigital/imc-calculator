<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IMCData extends Model
{
    protected $table = 'imc_data'; // Asegúrate de que coincide con el nombre de la tabla en la base de datos.
    protected $fillable = ['altura', 'peso', 'imc'];
}