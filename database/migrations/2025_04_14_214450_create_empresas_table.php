<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->id(); // equivale ao auto_increment primary key
            $table->string('nome_empresa');
            $table->string('cnpj', 14);
            $table->string('estado');
            $table->string('uf', 2);
            $table->string('rua');
            $table->string('bairro');
            $table->string('numero', 15);
            $table->string('slug');
            $table->string('tipo_empresa');
            $table->timestamps(); // adiciona created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
