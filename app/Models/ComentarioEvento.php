<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentarioEvento extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_comentario',
        'id_evento'
    ];
}
