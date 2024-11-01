<?php

namespace Database\Factories;

use App\Models\Imagem;
use App\Models\Amostra;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imagem>
 */
class ImagemFactory extends Factory
{
    protected $model = Imagem::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amostra_id' => Amostra::factory(), // Cria uma nova amostra associada
            'url' => $this->faker->imageUrl(640, 480, 'plants'), // URL ou caminho da imagem
            'img_micro' => $this->faker->imageUrl(640, 480, 'microscopy'), // URL para imagem microscópica
            'descricao' => $this->faker->sentence(), // Gera uma descrição aleatória da imagem
            'data_da_imagem' => $this->faker->date(), // Data da imagem
        ];
    }
}
