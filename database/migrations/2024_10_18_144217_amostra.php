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
        Schema::create('amostras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('planta_id')->constrained('plantas')->onDelete('cascade'); // Relacionamento com planta
            $table->string('local_coleta'); // No caso seria o sesi 
            $table->date('data_coleta')->nullable(); // Data de coleta
            $table->string('coletor')->nullable(); // Nome do coletor
            $table->unsignedInteger('quantidade_de_amostras'); //Numero e quantidades de amostras
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amostras');
    }
};
