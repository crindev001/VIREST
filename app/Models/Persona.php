<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'telefono',
        'correo',
        'direccion'
    ];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'id_persona');
    }
}
