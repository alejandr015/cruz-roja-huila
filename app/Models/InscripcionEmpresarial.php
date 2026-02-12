<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscripcionEmpresarial extends Model
{
    use HasFactory;

    protected $table = 'inscripciones_empresariales';

    protected $fillable = [
        'curso',
        'duracion',
        'modalidad',
        'empresa',
        'nit',
        'sector',
        'numero_participantes',
        'nombre_contacto',
        'cargo',
        'email',
        'telefono',
        'ciudad',
        'fecha_preferida',
        'mensaje',
        'estado',
        'observaciones',
    ];

    protected $casts = [
        'fecha_preferida' => 'date',
    ];

    public function getEstadoBadgeColorAttribute()
    {
        $colores = [
            'pendiente' => 'warning',
            'contactado' => 'info',
            'cotizado' => 'primary',
            'confirmado' => 'success',
            'rechazado' => 'danger',
        ];
        return $colores[$this->estado] ?? 'secondary';
    }

    public function getEstadoTextoAttribute()
    {
        $estados = [
            'pendiente' => 'Pendiente',
            'contactado' => 'Contactado',
            'cotizado' => 'Cotizado',
            'confirmado' => 'Confirmado',
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