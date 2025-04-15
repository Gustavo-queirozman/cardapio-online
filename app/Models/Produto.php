<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_produto',
        'descricao',
        'preco',
        'url_imagem',
        'categoria',
        'fk_empresa'
    ];

    protected $table = 'produto';
}
