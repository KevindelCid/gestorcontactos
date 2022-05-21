<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;

    protected $table = "personaslls";
    protected $fillable = [
        'correlativo',
        'nombre_trabajador',
        'sexo',
        'dpi',
        'departamento',
        'municipio', 
        'aldea_barrio_ref',
        'telefonos',
        'pasaporte_vigente',
        'esquema_vacunas',
        'ingreso',
        'pago',
        'estado',
        'nota',
        'modificacion',
        'fecha_ingreso',
        
    ];
}
