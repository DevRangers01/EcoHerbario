<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Planta;
use App\Models\Amostra;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Amostra>
 */
class AmostraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'planta_id' => Planta::orderBy('nome_comum', 'asc')->first()->id,
            'local_coleta' => 'SESI', // Local fixo como SESI
            'data_coleta' => $this->faker->optional()->date(), // Data de coleta ou nulo
            'coletor' => $this->faker->optional()->name(), // Nome do coletor ou nulo
            'quantidade_de_amostras' => $this->faker->numberBetween(1, 10), // Número entre 1 e 10
        ];
    }
}

