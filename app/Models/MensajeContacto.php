<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MensajeContacto extends Model
{
    use HasFactory;

    protected $table = 'mensajes_contacto';

    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'asunto',
        'mensaje',
        'leido',
    ];

    protected $casts = [
        'leido' => 'boolean',
        'fecha_envio' => 'datetime',
    ];

    public function scopeNoLeidos($query)
    {
        return $query->where('leido', false);
    }

    public function scopeRecientes($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}