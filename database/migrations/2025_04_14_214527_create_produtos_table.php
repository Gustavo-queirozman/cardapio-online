<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto');
            $table->string('descricao');
            $table->string('url_imagem');
            $table->string('categoria');
            $table->integer('preco');
            $table->foreignId('fk_empresa')
                  ->constrained('empresa')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produto');
    }
}
