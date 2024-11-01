<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Imagem; 
use App\Models\Planta;

class ImagemSeeder extends Seeder
{
    public function run(): void
    {
        $nomesComuns = [
            'Amacuca', 'Banana de Macaco', 'Buchinho', 'Costela de Adão', 'Dente de Tigre',
            'Dracena', 'Dracena-malaia', 'Girassol', 'Liro', 'Mangueira', 'Maracujá',
            'Palmeira Rabo de Peixe', 'Podocarpo', 'Roseira', 'Tibouchina Clavata', 'Pitanga',
            'Abacate', 'Amora', 'Árvore de Ferro', 'Bambuzinho', 'Goiaba', 'Laranja Pocam',
            'Limoeiro-taiti', 'Maricá', 'Milindeira', 'Uva Japonesa', 'Pinheiro'
        ];

        // Crie as plantas caso ainda não estejam no banco
        foreach ($nomesComuns as $nome) {
            Planta::firstOrCreate(['nome_comum' => $nome]);
        }

        // Associe uma imagem a cada planta
        $plantas = Planta::all();
        foreach ($plantas as $planta) {
            Imagem::create([
                'planta_id' => $planta->id,
                'url' => '/storage/img/' . strtolower(str_replace(' ', '_', $planta->nome_comum)) . '.jpg',
                'descricao' => 'Imagem da planta ' . $planta->nome_comum,
            ]);
        }
    }
}

