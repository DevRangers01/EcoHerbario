<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planta>
 */
class PlantaFactory extends Factory
{
    /**
     * Define o estado padrão do modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome_comum' => fake()->words(2, true), // Nome comum com duas palavras
            'nome_cientifico' => fake()->unique()->word() . ' ' . fake()->word(), // Nome científico "Gênero espécie"
            'familia' => fake()->unique()->word(), // Família da planta
            'genero' => fake()->unique()->word(), // Gênero da planta
            'especie' => fake()->unique()->word(), // Espécie da planta
            'habitat' => fake()->randomElement(['Floresta', 'Savana', 'Pantanal', 'Cerrado', 'Mata Atlântica', 'Áreas úmidas']), // Habitat
            'distribuicao_geografica' => fake()->randomElement(['América do Sul', 'América do Norte', 'Ásia', 'Europa', 'África', 'Oceania']), // Distribuição geográfica
            'descricao' => fake()->sentence(15), // Descrição breve
            'categoria' => fake()->randomElement(['Ornamental', 'Medicinal', 'Tropical', 'Temperada']), // Categoria
        ];
    }
}
