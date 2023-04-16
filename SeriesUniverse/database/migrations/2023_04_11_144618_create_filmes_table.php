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
            $table->enum('categoria',['Terror','Comedia','Acao','Romance']);
            $table->unsignedBigInteger('plataforma_id');
            $table->longText('descricao');
            $table->string('imagem')->nullable();
            $table->string('triler')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            
            $table->foreign('plataforma_id')
                  ->references('id')
                  ->on('plataformas')
                  ->onDelete('cascade');
                  

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users') 
                  ->onDelete('users');     
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
