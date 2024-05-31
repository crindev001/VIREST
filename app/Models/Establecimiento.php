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

    public function imgEstablecimiento()
    {
        return $this->hasOne(ImgEstablecimiento::class, 'id_establecimiento');
    }

    public function comentarios()
    {
        return $this->hasMany(ComentarioEstablecimiento::class, 'id_establecimiento', 'id');
    }

    public function calcularCalificacionPromedio()
    {
        $comentarios = $this->comentarios()->with('comentario')->get();
        $totalComentarios = $comentarios->count();
        if ($totalComentarios > 0) {
            $totalCalificacion = $comentarios->sum(function($comentarioEstablecimiento) {
                return $comentarioEstablecimiento->comentario->calificacion;
            });
            $calificacionPromedio = $totalCalificacion / $totalComentarios;
            // Redondear la calificación al múltiplo de 0.5 más cercano entre 1 y 5
            $calificacionRedondeada = round($calificacionPromedio * 2) / 2;
            return [
                'promedio' => min(max($calificacionRedondeada, 1), 5), // Asegura que la calificación esté entre 1 y 5
                'total' => $totalComentarios
            ];
        } else {
            return [
                'promedio' => 1, // Retorna 1 si no hay comentarios
                'total' => 0
            ];
        }
    }

}

/*
        $totalComentarios = $this->comentarios->count();
        if ($totalComentarios > 0) {
            $totalCalificacion = $this->comentarios->sum('calificacion');
            $calificacionPromedio = $totalCalificacion / $totalComentarios;
            // Redondear la calificación al múltiplo de 0.5 más cercano entre 1 y 5
            $calificacionRedondeada = round($calificacionPromedio * 2) / 2;
            return min(max($calificacionRedondeada, 1), 5); // Asegura que la calificación esté entre 1 y 5
        } elseif ($totalComentarios === 1) {
            // Si hay solo un comentario, podría considerarse la calificación del único comentario
            return $this->comentarios->first()->calificacion;
        } else {
            return null; // Retorna null si no hay comentarios
        }
*/