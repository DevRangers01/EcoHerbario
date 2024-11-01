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
        Schema::create('plantas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_comum'); // Nome da planta
            $table->string('nome_cientifico')->unique(); // Nome científico único
            $table->string('familia'); // Família a que pertence
            $table->string('genero'); // Gênero da planta
            $table->string('especie'); // Espécie da planta
            $table->string('habitat'); // Habitat natural
            $table->string('distribuicao_geografica'); // Distribuição geográfica
            $table->text('descricao'); // Descrição da planta
            $table->string('categoria'); // Categoria (tropicais, temperadas, ornamentais, medicinais)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantas');
    }
};
