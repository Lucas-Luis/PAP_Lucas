<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('plataforma_id');
            $table->longText('descricao');
            $table->date('ano_lancamento');
            $table->string('duracao');
            $table->string('realizador');
            $table->longText('elenco');
            $table->string('imagem')->nullable();
            $table->string('trailer')->nullable();
            $table->float('avaliacao');
            $table->boolean('destaque');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();


            $table->foreign('categoria_id')
                  ->references('id')
                  ->on('categorias')
                  ->onDelete('cascade');

            $table->foreign('plataforma_id')
                  ->references('id')
                  ->on('plataformas')
                  ->onDelete('cascade');

          $table->foreign('user_id')
                 ->references('id')
                 ->on('users')
                 ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmes');
    }
};
