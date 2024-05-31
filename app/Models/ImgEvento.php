<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgEvento extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_evento',
        'imagen'
    ];
}
