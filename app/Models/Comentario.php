<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'calificacion',
        'fecha'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function establecimientos()
    {
        return $this->hasManyThrough(Establecimiento::class, ComentarioEstablecimiento::class, 'id_comentario', 'id', 'id', 'id_establecimiento');
    }
}
