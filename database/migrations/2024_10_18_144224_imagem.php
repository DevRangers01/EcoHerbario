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
        Schema::create('imagens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('amostra_id')->constrained('amostra')->onDelete('cascade'); // Relacionamento com planta
            $table->string('url'); // URL ou caminho da imagem
            $table->string('img_micro'); //Img microscopica
            $table->string('descricao')->nullable(); // Descrição opcional da imagem
            $table->date('data_da_imagem'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagens');
    }
};
