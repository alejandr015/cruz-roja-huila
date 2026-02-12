<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscripcionDiplomado extends Model
{
    use HasFactory;

    protected $table = 'inscripciones_diplomados';

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
        'estado',
        'observaciones',
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
    ];

    public function getHorarioNombreAttribute()
    {
        $horarios = [
            'fin-de-semana' => 'Fin de Semana',
            'entre-semana' => 'Entre Semana',
            'sabados' => 'Solo Sábados',
            'domingos' => 'Solo Domingos',
        ];
        return $horarios[$this->horario] ?? 'No especificado';
    }

    public function getEstadoBadgeColorAttribute()
    {
        $colores = [
            'pendiente' => 'warning',
            'contactado' => 'info',
            'matriculado' => 'success',
            'rechazado' => 'danger',
        ];
        return $colores[$this->estado] ?? 'secondary';
    }

    public function getEstadoTextoAttribute()
    {
        $estados = [
            'pendiente' => 'Pendiente',
            'contactado' => 'Contactado',
            'matriculado' => 'Matriculado',
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