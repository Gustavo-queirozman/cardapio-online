<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_empresa',
        'cnpj',
        'estado',
        'uf',
        'rua',
        'bairro',
        'numero',
        'slug_nome_empresa',
        'tipo_empresa',
    ];

    protected $table = 'empresa';
}
