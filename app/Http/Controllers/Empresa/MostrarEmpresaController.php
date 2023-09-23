<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MostrarEmpresaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function show(Request $request, $slug)
    {
        
        dd($slug);
       // $empresa = Empresa::where('slug',);
    }
}
