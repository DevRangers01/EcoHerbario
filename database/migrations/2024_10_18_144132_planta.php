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
            $table->string('nome'); // Nome da planta
            $table->string('nome_cientifico'); //Nome cientifico
            $table->string('familia'); //Familia em que pertence
            $table->string('genero'); //Genero de planta pertencente
            $table->string('especie'); //Especie de planta pertencente
            $table->text('habitat'); //Habitat natural
            $table->text('dist_geo'); //Distribuição geografica
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

