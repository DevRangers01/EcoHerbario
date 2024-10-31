<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Planta; // Certifique-se de ter a model `Planta` configurada

class PlantaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Planta::create([
            'nome_comum' => "Abacate",
            'nome_cientifico'=> "Persea americana",
            'familia' => "Lauraceae",
            'genero' => "Persea",
            'especie' => "Persea americana",
            'descricao' => "Árvore perenifólia, atinge até 20 metros de altura. Possui folhas verdes, coriáceas, e frutos grandes e comestíveis, chamados de abacates, com casca rugosa e polpa cremosa.",
            'habitat' => "Florestas tropicais e subtropicais",
            'distribuicao_geografica' => "Nativa da América Central e do México, amplamente cultivada em regiões tropicais e subtropicais do mundo.",
            'observacoes' => "O abacate é amplamente utilizado na alimentação, tanto in natura quanto em preparações culinárias, como guacamole."
        ]);
    }
}
