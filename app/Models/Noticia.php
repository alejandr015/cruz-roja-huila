<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'contenido',
        'imagen',
        'fecha_publicacion',
        'categoria',
        'activo',
    ];

    protected $casts = [
        'fecha_publicacion' => 'datetime',
        'activo' => 'boolean',
    ];

    // Scopes útiles
    public function scopeActivas($query)
    {
        return $query->where('activo', true);
    }

    public function scopeRecientes($query)
    {
        return $query->orderBy('fecha_publicacion', 'desc');
    }

    public function scopePorCategoria($query, $categoria)
    {
        return $query->where('categoria', $categoria);
    }
}