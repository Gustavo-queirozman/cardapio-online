<?php

namespace App\Http\Controllers\Cardapio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MostrarCardapioController extends Controller
{
    public function show(Request $request, $slug){
        $empresa = Empresa::where('slug', $slug);
        dd($empresa);
    }
}
