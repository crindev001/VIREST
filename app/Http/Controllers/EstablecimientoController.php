<?php

namespace App\Http\Controllers;

use App\Models\ComentarioEstablecimiento;
use App\Models\Establecimiento;
use App\Models\ImgEstablecimiento;
use App\Models\TipoEstablecimiento;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    public function Hoteles()
    {
        $hoteles = Establecimiento::where('id_tipo_establecimiento', 4)
        ->where('id_estado', 1)
        ->with(['imgEstablecimientos','comentarios.usuario.persona'])
        ->get();
        return view('establecimientos.hoteles', compact('hoteles'));
    }

    public function mostrarEstablecimientos()
    {
        $establecimientos = Establecimiento::whereIn('id_tipo_establecimiento', [1, 2, 3, 5])
            ->where('id_estado', 1)
            ->get();

        return view('establecimientos.restaurants', compact('establecimientos'));
    }
}
