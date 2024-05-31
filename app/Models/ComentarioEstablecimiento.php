<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentarioEstablecimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_comentario',
        'id_establecimiento'
    ];

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class, 'id_establecimiento');
    }

    public function comentario()
    {
        return $this->belongsTo(Comentario::class, 'id_comentario');
    }
}
