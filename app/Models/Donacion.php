<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    use HasFactory;

    protected $table = 'donaciones';

    protected $fillable = [
        'nombre_donante',
        'email',
        'telefono',
        'monto',
        'tipo_donacion',
        'metodo_pago',
        'descripcion',
        'comprobante',
    ];

    protected $casts = [
        'monto' => 'decimal:2',
        'fecha_donacion' => 'datetime',
    ];
}