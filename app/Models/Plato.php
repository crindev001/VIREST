<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tipo_comida',
        'id_tipo_cocina',
        'descripcion'
    ];
}
