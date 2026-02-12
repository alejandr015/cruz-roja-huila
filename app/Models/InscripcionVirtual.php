<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscripcionVirtual extends Model
{
    use HasFactory;

    protected $table = 'inscripciones_virtuales';

    protected $fillable = [
        'curso',
        'duracion',
        'modalidad',
        'nombre',
        'documento',
        'email',
        'telefono',
        'fecha_nacimiento',
        'ciudad',
        'pais',
        'nivel_conocimiento',
        'motivacion',
        'estado',
        'observaciones',
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
    ];

    public function getNivelConocimientoTextoAttribute()
    {
        $niveles = [
            'ninguno' => 'Sin conocimientos previos',
            'basico' => 'Básico',
            'intermedio' => 'Intermedio',
            'avanzado' => 'Avanzado',
        ];
        return $niveles[$this->nivel_conocimiento] ?? 'No especificado';
    }

    public function getEstadoBadgeColorAttribute()
    {
        $colores = [
            'pendiente' => 'warning',
            'aprobado' => 'info',
            'activo' => 'primary',
            'completado' => 'success',
            'rechazado' => 'danger',
        ];
        return $colores[$this->estado] ?? 'secondary';
    }

    public function getEstadoTextoAttribute()
    {
        $estados = [
            'pendiente' => 'Pendiente',
            'aprobado' => 'Aprobado',
            'activo' => 'Activo',
            'completado' => 'Completado',
            'rechazado' => 'Rechazado',
        ];
        return $estados[$this->estado] ?? 'Desconocido';
    }

    public function scopeEstado($query, $estado)
    {
        return $query->where('estado', $estado);
    }

    public function scopeRecientes($query, $limite = 10)
    {
        return $query->orderBy('created_at', 'desc')->limit($limite);
    }

    public function scopePendientes($query)
    {
        return $query->where('estado', 'pendiente')->orderBy('created_at', 'desc');
    }
}