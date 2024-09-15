<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_establecimiento',
        'direccion_manzana',
        'direccion_calleprincipal',
        'direccion_numero',
        'direccion_transversal',
        'direccion_referencia',
        'nombre_administrador',
        'telefono_contacto',
        'email_contacto',
        'ubicacion',
        'ruta',
        'provincia_id',
        'ciudad_id',
        'cliente_id',
    ];
    protected $table = 'establecimientos';
    protected $hidden = ['created_at', 'updated_at'];
}
