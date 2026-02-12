<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscripcionCurso extends Model
{
    use HasFactory;

    protected $table = 'inscripciones_cursos';

    protected $fillable = [
        'curso',
        'duracion',
        'inversion',
        'modalidad',
        'nombre',
        'documento',
        'email',
        'telefono',
        'fecha_nacimiento',
        'ciudad',
        'horario',
        'observaciones',
        'estado',
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
    ];

    public function scopePendientes($query)
    {
        return $query->where('estado', 'pendiente');
    }

    public function scopeConfirmados($query)
    {
        return $query->where('estado', 'confirmado');
    }
}