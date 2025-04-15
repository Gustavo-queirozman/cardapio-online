<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('empresa')->insert([
            'id' => 1,
            'nome_empresa' => 'burguer king',
            'cnpj' => '00000000000000',
            'estado' => 'Minas Gerais',
            'uf' => 'MG',
            'rua' => 'Rua Beco São Paulo',
            'bairro' => 'Centro',
            'numero' => '30',
            'slug' => 'burguer_king',
            'tipo_empresa' => 'lanchonete',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
