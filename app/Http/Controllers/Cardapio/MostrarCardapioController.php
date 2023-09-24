<?php

namespace App\Http\Controllers\Cardapio;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MostrarCardapioController extends Controller
{
    public function show(Request $request, $slug)
    {
        $empresa = Cache::remember("empresa_$slug", 60, function () use ($slug) {
            return Empresa::where('slug_nome_empresa', $slug)->firstOrFail();
        });

        $produtos = Cache::remember("produtos_da_empresa_ $empresa->id", 60, function () use ($empresa) {
            return Produto::where('fk_empresa', $empresa->id)->get();
        });

        return view('cardapio.mostrar', with(['empresa' => $empresa, 'produtos' => $produtos]));
    }
}
