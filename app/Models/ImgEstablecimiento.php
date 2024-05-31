<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgEstablecimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_establecimiento',
        'imagen'
    ];

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class, 'id_establecimiento');
    }
}
