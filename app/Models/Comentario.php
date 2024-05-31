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

    public function establecimientos()
    {
        return $this->belongsToMany(Establecimiento::class, 'comentario_establecimientos', 'id_comentario', 'id_establecimiento');
    }
}
