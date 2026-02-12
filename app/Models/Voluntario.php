<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    use HasFactory;

    protected $fillable = [
        'modalidad',
        'nombre',
        'apellido',
        'email',
        'telefono',
        'documento',
        'fecha_nacimiento',
        'direccion',
        'ciudad',
        'estado',
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
        'fecha_registro' => 'datetime',
    ];

    // Accessor para nombre completo
    public function getNombreCompletoAttribute()
    {
        return "{$this->nombre} {$this->apellido}";
    }

    // Scopes
    public function scopePendientes($query)
    {
        return $query->where('estado', 'pendiente');
    }

    public function scopeAprobados($query)
    {
        return $query->where('estado', 'aprobado');
    }
}