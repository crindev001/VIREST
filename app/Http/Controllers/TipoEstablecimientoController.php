<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establecimiento;
use App\Models\TipoEstablecimiento;

class TipoEstablecimientoController extends Controller
{

    public function tipoEstablecimiento()
    {
        $tiposEstablecimiento = TipoEstablecimiento::with('establecimientos')->get();
        return response()->json($tiposEstablecimiento);
    }
}
