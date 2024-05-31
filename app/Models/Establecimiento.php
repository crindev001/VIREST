<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tipo_establecimiento',
        'nombre',
        'descripcion',
        'telefono',
        'direccion',
        'url'
    ];

    public function tipoEstablecimiento()
    {
        return $this->belongsTo(TipoEstablecimiento::class, 'id_tipo_establecimiento');
    }

    public function imgEstablecimientos()
    {
        return $this->hasMany(ImgEstablecimiento::class, 'id_establecimiento');
    }

    public function imgEstablecimiento()
    {
        return $this->hasOne(ImgEstablecimiento::class, 'id_establecimiento');
    }

    public function comentarios()
    {
        return $this->hasManyThrough(Comentario::class, ComentarioEstablecimiento::class, 'id_establecimiento', 'id', 'id', 'id_comentario');
    }

    public function calcularCalificacionPromedio()
    {
        $comentarios = $this->comentarios()->with('usuario.persona')->get();
        $totalComentarios = $comentarios->count();
        $totalCalificacion = $comentarios->sum('calificacion');

        $mejorComentario = $comentarios->sortByDesc('calificacion')->first();

        $mejorComentarioTexto = $mejorComentario ? $mejorComentario->descripcion : null;
        $mejorComentarioUsuario = $mejorComentario && $mejorComentario->usuario ? $mejorComentario->usuario->persona->nombre : null;

        if ($totalComentarios > 0) {
            $calificacionPromedio = $totalCalificacion / $totalComentarios;
            return [
                'promedio' => $calificacionPromedio,
                'total' => $totalComentarios,
                'mejor_comentario' => $mejorComentarioTexto,
                'mejor_comentario_usuario' => $mejorComentarioUsuario
            ];
        } else {
            return [
                'promedio' => 0,
                'total' => 0,
                'mejor_comentario' => null,
                'mejor_comentario_usuario' => null
            ];
        }
    }
}
