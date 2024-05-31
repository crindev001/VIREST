<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tipo_usuario',
        'id_estado',
        'user',
        'password',
        'pwd_enc'
    ];
}
