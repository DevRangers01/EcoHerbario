<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImagemSeeder extends Seeder
{
    public function run(): void
    {
        // Lista de plantas e caminhos de imagens fixos
        $imagens = [
            [
                'nome_planta' => 'Abacate',
                'url' => '/storage/img/abacate.jpg',
            ],
            [
                'nome_planta' => 'Amacuca',
                'url' => '/storage/img/Amacuca.jpg',
            ],
            [
                'nome_planta' => 'Amora',
                'url' => '/storage/img/Amora.jpg',
            ],
            [
                'nome_planta' => 'Árvore de Ferro',
                'url' => '/storage/img/árvore_de_ferro.jpg',
            ],
            [ 
                'nome_planta' => 'Bambuzinho',
                'url' => '/storage/img/bambuzinho.jpg',
            ],
            [
                'nome_planta' => 'Banana de Macaco',
                'url' => '/storage/img/banana_de_maacaco.jpg',
            ],
            [
                'nome_planta' => 'Buchinho',
                'url' => '/storage/img/buchinho.jpg',
            ],
            [
                'nome_planta' => 'Costela de Adão',
                'url' => '/storage/img/costela_de_adao.jpg',
            ],
            [
                'nome_planta' => 'Dente de Tigre',
                'url' => '/storage/img/dente_de_tigre.jpg',
            ],
            [
                'nome_planta' => 'Dracena Malaia',
                'url' => '/storage/img/dracena_malaia.jpg',
            ],
            [
                'nome_planta' => 'Dracena',
                'url' => '/storage/img/dracena.jpg',
            ],
            [
                'nome_planta' => 'Girassol',
                'url' => '/storage/img/girassol.jpg',
            ],
            [
                'nome_planta' => 'Goiaba',
                'url' => '/storage/img/goiaba.jpg',
            ],
            [
                'nome_planta' => 'Laranja Pocam',
                'url' => '/storage/img/laranja_pocam.jpg',
            ],
            [
                'nome_planta' => 'Limão Taiti',
                'url' => '/storage/img/limao.jpg',
            ],
            [
                'nome_planta' => 'Líro da Paz',
                'url' => '/storage/img/lirio.jpg',
            ],
            [
                
                'nome_planta' => 'Mangueira',
                'url' => '/storage/img/mangueira.jpg',
            ],
            [
                
                'nome_planta' => 'Maracujá',
                'url' => '/storage/img/maracujá.jpg',
            ],
            [
                
                'nome_planta' => 'Maricá',
                'url' => '/storage/img/maricá.jpg',
            ],
            [
                
                'nome_planta' => 'Metasequoia',
                'url' => '/storage/img/metasequoia.jpg',
            ],
            [
                
                'nome_planta' => 'Milindeira',
                'url' => '/storage/img/milindeira.jpg',
            ],
            [
                
                'nome_planta' => 'Olho de Boneca',
                'url' => '/storage/img/olho_de_boneca.jpg',
            ],
            [
                
                'nome_planta' => 'Palmeira Rabo de Peixe',
                'url' => '/storage/img/palmeira_rabo_de_peixe.jpg',
            ],
            [
                
                'nome_planta' => 'Pinheiro',
                'url' => '/storage/img/pinheiro.jpg',
            ],
            [
                
                'nome_planta' => 'Pitanga',
                'url' => '/storage/img/pitanga.jpg',
            ],
            [
                
                'nome_planta' => 'Podocarpo',
                'url' => '/storage/img/podocarpo.jpg',
            ],
            [
                
                'nome_planta' => 'Roseira',
                'url' => '/storage/img/roseira.jpg',
            ],
            [
                
                'nome_planta' => 'Tibouchina',
                'url' => '/storage/img/tibouchina.jpg',
            ],
            [
                
                'nome_planta' => 'Uva Japonesa',
                'url' => '/storage/img/uva_japonesa.jpg',
            ]
        ];

        // Exibe ou usa os dados diretamente, por exemplo, imprimindo:
        foreach ($imagens as $imagem) {
            echo "Planta: {$imagem['nome_planta']}, Imagem: {$imagem['url']}\n";
        }
        
        Imagem:create([
            'url' => $imagem['/storage/img/abacate.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/Amacuca.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/Amora.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/árvore_de_ferro.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/bambuzinho.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/banana_de_maacaco.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/buchinho.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/costela_de_adao.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/dente_de_tigre.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/dracena_malaia.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/dracena.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/girassol.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/goiaba.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/laranja_pocam.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/limao.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/lirio.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/mangueira.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/maracujá.jpgg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/maricá.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/metasequoia.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/milindeira.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/olho_de_boneca.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/palmeira_rabo_de_peixe.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/pinheiro.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/pitanga.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/podocarpo.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/roseira.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/tibouchina.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);

        Imagem:create([
            'url' => $imagem['/storage/img/uva_japonesa.jpg'],
            'img_micro' => $imagem['img_micro'],
            'planta_id' => $imagem['planta_id'],
        ]);
    

    }
}
