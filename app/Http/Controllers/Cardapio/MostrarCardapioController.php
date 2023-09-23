<?php

namespace App\Http\Controllers\Cardapio;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\Produto;
use Illuminate\Http\Request;

class MostrarCardapioController extends Controller
{
    public function show(Request $request, $slug)
    {
        $empresa = Empresa::where('slug_nome_empresa', $slug)->firstOrFail();
        $produtos = Produto::where('fk_empresa', $empresa->id)->get();
        for ($i = 0; $i <= $produtos->count(); $i++) {
            $produto = $produtos[$i]->getAttributes();
            echo json_encode($produto,true);
        }
        return view('cardapio.mostrar', compact('empresa', 'produtos'));
    }
}
