<?php

namespace App\Http\Controllers\Cardapio;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\Produto;
use Illuminate\Http\Request;

class MostrarCardapioController extends Controller
{
    public function show(Request $request, $slug){
        $empresa = Empresa::where('slug_nome_empresa', $slug)->first();
        $id_empresa = $empresa->getAttributes()['id'];

        $produtos = Produto::where('fk_empresa', $id_empresa)->get();
        for($i=0;$i<=$produtos->count();$i++){
            dd($produtos[$i]->getAttributes());
        }
    }
}
