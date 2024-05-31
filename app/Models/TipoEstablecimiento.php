<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEstablecimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'descripcion'
    ];

    public function establecimientos()
    {
        return $this->hasMany(Establecimiento::class, 'id_tipo_establecimiento');
    }
}
