<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;

class MostrarEmpresaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function show(Request $request, $slug)
    {
       $empresa = Empresa::where('slug', $slug);
       dd($empresa);
    }
}
