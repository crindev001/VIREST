<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoEstablecimiento;
use App\Models\ImgEstablecimiento;

class AuthController extends Controller
{
    public function inicio()
    {
        $tipoEstablecimientos = TipoEstablecimiento::with('establecimientos')->get();
        $imgEstablecimientos = ImgEstablecimiento::all()->pluck('imagen', 'id_establecimiento');
        return view('main-page.home', compact('tipoEstablecimientos', 'imgEstablecimientos'));
    }
}
