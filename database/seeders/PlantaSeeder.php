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
            'categoria' => "Tropicais",
            'descricao' => "Árvore perenifólia, atinge até 20 metros de altura. Possui folhas verdes, coriáceas, e frutos grandes e comestíveis, chamados de abacates, com casca rugosa e polpa cremosa.",
            'habitat' => "Florestas tropicais e subtropicais",
            'distribuicao_geografica' => "Nativa da América Central e do México, amplamente cultivada em regiões tropicais e subtropicais do mundo.",
            'observacoes' => "O abacate é amplamente utilizado na alimentação, tanto in natura quanto em preparações culinárias, como guacamole."
        ]);
       
        Planta::create([ 
           'nome_comum' => "Amacuca",
           'nome_cientifico' => "Zingiber zerumbet",
           'familia' => "Zingiberaceae",
           'genero' => "Zingiber",
           'especie' => "Zingiber zerumbet",
           'categoria' => "Ornamentais, Medicinais",
           'descricao' => "Planta herbácea perene com rizomas aromáticos, folhas lanceoladas, e inflorescências cônicas que se tornam vermelhas com o tempo.",
           'habitat' => "Florestas tropicais úmidas",
           'distribuicao_geografica' => "Nativa do sudeste asiático, mas cultivada em várias regiões tropicais.",
           'observacoes' => "A planta é conhecida por suas propriedades medicinais e pelo uso do seu rizoma em cosméticos."
      ]);

        Planta::create([
            'nome_comum'=> "Amora",
            'nome_cientifico'=> "Morus nigra",
            'familia'=> "Moraceae",
            'genero'=> "Morus",
            'especie'=> "Morus nigra",
            'categoria'=> "Temperadas, Tropicais, Temperadas",
            'descricao'=> "Árvore de pequeno a médio porte, com folhas caducas, ovais, e frutos comestíveis que mudam de cor do verde ao roxo escuro.",
            'habitat'=> "Climas temperados e subtropicais",
            'distribuicao_geografica'=> "Nativa do sudoeste da Ásia, amplamente cultivada em regiões temperadas e subtropicais.",
            'observacoes'=> "Os frutos são ricos em vitaminas e antioxidantes, usados tanto na alimentação quanto na medicina popular."
        ]);

        Planta::create([
            'nome_comum'=> "Árvore de Ferro",
            'nome_cientifico'=> "Parrotia persica",
            'familia'=> "Hamamelidaceae",
            'genero'=> "Parrotia",
            'especie'=> "Parrotia persica",
            'categoria'=> "Tropicais, Temperadas", 
            'descricao'=> "Árvore caducifólia, com casca esfoliante, folhas ovais, e flores pequenas e vermelhas que aparecem antes das folhas na primavera.",
            'habitat'=> "Florestas montanhosas",
            'distribuicao_geografica'=> "Nativa do Irã e Azerbaijão.",
            'observacoes'=> "A madeira é extremamente dura, sendo utilizada em marcenaria e carpintaria."
        ]);

        Planta::create([
            'nome_comum'=> "Bambuzinho",
            'nome_cientifico'=> "Bambusa vulgaris",
            'familia'=> "Poaceae",
            'genero'=> "Bambusa",
            'especie'=> "Bambusa vulgaris",
            'categoria'=> "Tropicais",
            'descricao'=> "Planta perene, de crescimento rápido, com colmos cilíndricos e ocos, folhas lanceoladas e verdes.",
            'habitat'=> "Florestas tropicais",
            'distribuicao_geografica'=> "Nativa do sul da Ásia, cultivada em várias regiões tropicais do mundo.",
            'observacoes'=> "Muito utilizada em construções, artesanato e como planta ornamental."
        ]);

        Planta::create([
            'nome_comum'=> "Banana de Macaco",
            'nome_cientifico'=> "Strelitzia reginae",
            'familia'=> "Strelitziaceae",
            'genero'=> "Strelitzia",
            'especie'=> "Strelitzia reginae",
            'categoria'=> "Ornamentais",
            'descricao'=> "Planta herbácea perene, com folhas grandes e coriáceas, e inflorescências que lembram um pássaro, com pétalas laranjas e azuis.",
            'habitat'=> "Regiões subtropicais e tropicais",
            'distribuicao_geografica'=> "Nativa da África do Sul.",
            'observacoes'=> "Conhecida também como ave-do-paraíso, é muito utilizada como planta ornamental."
        ]);

        Planta::create([
            'nome_comum'=> "Buchinho",
            'nome_cientifico'=> "Buxus sempervirens",
            'familia'=> "Buxaceae",
            'genero'=> "Buxus",
            'especie'=> "Buxus sempervirens",
            'categoria'=> "Ornamentais, Temperadas",
            'descricao'=> "Arbusto perene, de crescimento lento, com folhas pequenas, ovais e verdes, usadas em topiaria.",
            'habitat'=> "Florestas temperadas e subtropicais",
            'distribuicao_geografica'=> "Nativo da Europa, África do Norte e Ásia Ocidental.",
            'observacoes'=> "Amplamente utilizado em jardins formais e como planta ornamental."
        ]);

        Planta::create([
            'nome_comum'=> "Costela de Adão",
            'nome_cientifico'=> "Monstera deliciosa",
            'familia'=> "Araceae",
            'genero'=> "Monstera",
            'especie'=> "Monstera deliciosa",
            'categoria'=> "Ornamentais, Tropicais",
            'descricao'=> "Planta trepadeira com folhas grandes, coriáceas e profundamente recortadas, que dão um aspecto característico de 'costelas'.",
            'habitat'=> "Florestas tropicais",
            'distribuicao_geografica'=> "Nativa da América Central, cultivada em regiões tropicais e subtropicais.",
            'observacoes'=> "Muito utilizada como planta ornamental em ambientes internos e externos."
        ]);

        Planta::create([
            'nome_comum'=> "Dente de Tigre",
            'nome_cientifico'=> "Trichocentrum tigrinum",
            'familia'=> "Orchidaceae",
            'genero'=> "Trichocentrum",
            'especie'=> "Trichocentrum tigrinum",
            'categoria'=> "Ornamentais, Tropicais",
            'descricao'=> "Orquídea epífita com folhas coriáceas, flores pequenas e perfumadas, de cor amarelo-alaranjada com manchas marrons, lembrando o padrão de uma pele de tigre.",
            'habitat'=> "Florestas tropicais",
            'distribuicao_geografica'=> "Nativa da América Central.",
            'observacoes'=> "Apresenta florescimento anual e é muito apreciada por colecionadores de orquídeas."
        ]);

        Planta::create([
            'nome_comum'=> "Dracena",
            'nome_cientifico'=> "Dracaena marginata",
            'familia'=> "Asparagaceae",
            'genero'=> "Dracaena",
            'especie'=> "Dracaena marginata",
            'categoria'=> "Ornamentais, Tropicais",
            'descricao'=> "Planta arbustiva com tronco delgado, folhas longas e estreitas, de cor verde com margens vermelhas.",
            'habitat'=> "Regiões tropicais",
            'distribuicao_geografica'=> "Nativa de Madagascar, amplamente cultivada como planta ornamental em regiões tropicais e subtropicais.",
            'observacoes'=> "Muito utilizada em ambientes internos devido à sua resistência e estética."
        ]);

        Planta::create([
            'nome_comum'=> "Dracena-malaia",
            'nome_cientifico'=> "Dracaena fragrans",
            'familia'=> "Asparagaceae",
            'genero'=> "Dracaena",
            'especie'=> "Dracaena fragrans",
            'categoria'=> "Ornamentais, Tropicais",
            'descricao'=> "Planta arbustiva com folhas largas, verdes e brilhantes, que crescem em rosetas ao longo do caule.",
            'habitat'=> "Florestas tropicais e subtropicais",
            'distribuicao_geografica'=> "Nativa da África tropical, cultivada em várias regiões tropicais e subtropicais.",
            'observacoes'=> "Muito utilizada em interiores, conhecida por sua tolerância a ambientes de baixa luminosidade."
        ]);

        Planta::create([
            'nome_comum'=> "Girassol",
            'nome_cientifico'=> "Helianthus annuus",
            'familia'=> "Asteraceae",
            'genero'=> "Helianthus",
            'especie'=> "Helianthus annuus",
            'categoria'=> "Ornamentais, Temperadas",
            'descricao'=> "Planta anual, com caule alto, folhas grandes e inflorescências grandes e amarelas, que seguem a direção do sol durante o dia.",
            'habitat'=> "Regiões temperadas e subtropicais",
            'distribuicao_geografica'=> "Nativa da América do Norte, amplamente cultivada em todo o mundo.",
            'observacoes'=> "Utilizada tanto na alimentação, com a produção de óleo, quanto como planta ornamental."
        ]);

        Planta::create([  
            'nome_comum'=> "Goiaba",
            'nome_cientifico'=> "Psidium guajava",
            'familia'=> "Myrtaceae",
            'genero'=> "Psidium",
            'especie'=> "Psidium guajava",
            'categoria'=> "Tropicais",
            'descricao'=> "Árvore de pequeno a médio porte, com folhas verde-escuras, ovais, e frutos comestíveis de polpa doce e aromática.",
            'habitat'=> "Regiões tropicais e subtropicais.",
            'distribuicao_geografica'=> "Nativa da América Central, amplamente cultivada em regiões tropicais e subtropicais do mundo.",
            'observacoes'=> "Fruto muito popular, consumido in natura ou em forma de sucos, geleias e doces."
        ]);

        Planta::create([
            'nome_comum'=> "Laranja Pocam",
            'nome_cientifico'=> "Citrus reticulata",
            'familia'=> "Rutaceae",
            'genero'=> "Citrus",
            'especie'=> "Citrus reticulata",
            'categoria'=> "Tropicais",
            'descricao'=> "Árvore de pequeno a médio porte, com folhas verdes e aromáticas, flores brancas e frutos esféricos, com casca fina e fácil de descascar.",
            'habitat'=> "Regiões subtropicais e tropicais.",
            'distribuicao_geografica'=> "Nativa do sudeste asiático, amplamente cultivada em regiões subtropicais e tropicais.",
            'observacoes'=> "A laranja-pocam, ou tangerina, é muito apreciada pelo seu sabor doce e refrescante."
        ]);

        Planta::create([
            'nome_comum'=> "Limoeiro-taiti",
            'nome_cientifico'=> "Citrus × latifolia",
            'familia'=> "Rutaceae",
            'genero'=> "Citrus",
            'especie'=> "Citrus × latifolia",
            'categoria'=> "Tropicais",
            'descricao'=> "Árvore de pequeno porte, com folhas verdes, flores brancas e perfumadas, e frutos esféricos, de casca verde e polpa ácida.",
            'habitat'=> "Regiões tropicais e subtropicais.",
            'distribuicao_geografica'=> "Híbrido originado na Ásia, amplamente cultivado em regiões tropicais e subtropicais.",
            'observacoes'=> "O limão-taiti é amplamente utilizado na culinária e na produção de bebidas."
        ]);

        Planta::create([
            'nome_comum'=> "Liro",
            'nome_cientifico'=> "Lilium candidum",
            'familia'=> "Liliaceae",
            'genero'=> "Lilium",
            'especie'=> "Lilium candidum",
            'categoria'=> "Ornamentais, Temperadas",
            'descricao'=> "Planta herbácea perene, com folhas lanceoladas e flores grandes, brancas e perfumadas, em forma de trombeta.",
            'habitat'=> "Regiões temperadas.",
            'distribuicao_geografica'=> "Nativa do Mediterrâneo, cultivada em várias regiões temperadas do mundo.",
            'observacoes'=> "O lírio é uma planta ornamental muito popular, símbolo de pureza e majestade."
        ]);

        Planta::create([
            'nome_comum' => "Mangueira",
            'nome_cientifico' => "Mangifera indica",
            'familia' => "Anacardiaceae",
            'genero' => "Mangifera",
            'especie' => "Mangifera indica",
            'categoria'=> "Ornamentais, Tropicais ",
            'descricao' => "Árvore de grande porte, com folhas verde-escuras, coriáceas, e frutos grandes, comestíveis e suculentos, de cor variada.",
            'habitat' => "Florestas tropicais e subtropicais.",
            'distribuicao_geografica' => "Nativa do sul da Ásia, amplamente cultivada em regiões tropicais e subtropicais do mundo.",
            'observacoes' => "A manga é um dos frutos tropicais mais consumidos no mundo, utilizada tanto in natura quanto em sucos e doces."
        ]);
        
        Planta::create([
            'nome_comum' => "Maracujá",
            'nome_cientifico' => "Passiflora edulis",
            'familia' => "Passifloraceae",
            'genero' => "Passiflora",
            'especie' => "Passiflora edulis",
            'categoria'=> "Ornamentais, Medicinais, Tropicais",
            'descricao' => "Planta trepadeira perene, com folhas lobadas, flores grandes e perfumadas, e frutos ovais, com casca dura e polpa suculenta.",
            'habitat' => "Regiões tropicais e subtropicais.",
            'distribuicao_geografica' => "Nativa da América do Sul, amplamente cultivada em regiões tropicais e subtropicais.",
            'observacoes' => "O maracujá é muito utilizado na produção de sucos e sobremesas, além de ter propriedades calmantes."
        ]);
        
        Planta::create([
            'nome_comum' => "Maricá",
            'nome_cientifico' => "Mimosa bimucronata",
            'familia' => "Fabaceae",
            'genero' => "Mimosa",
            'especie' => "Mimosa bimucronata",
            'categoria'=> "Tropicais",
            'descricao' => "Árvore de pequeno a médio porte, com folhas bipinadas, pequenas flores amarelas dispostas em inflorescências esféricas, e frutos em forma de vagem.",
            'habitat' => "Áreas úmidas e margens de rios.",
            'distribuicao_geografica' => "Nativa do Brasil, encontrada em regiões subtropicais e tropicais da América do Sul.",
            'observacoes' => "A planta é utilizada na recuperação de áreas degradadas e na arborização urbana."
        ]);
        
        Planta::create([
            'nome_comum' => "Metasequoia glyptostroboides",
            'nome_cientifico' => "Metasequoia glyptostroboides",
            'familia' => "Cupressaceae",
            'genero' => "Metasequoia",
            'especie' => "Metasequoia glyptostroboides",
            'categoria'=> "Ornamentais, Temperadas",
            'descricao' => "Árvore caducifólia, de crescimento rápido, com folhas verdes e suaves, dispostas em pares opostos ao longo dos ramos.",
            'habitat' => "Áreas úmidas e pantanosas.",
            'distribuicao_geografica' => "Nativa da China, cultivada em várias regiões temperadas do mundo.",
            'observacoes' => "Considerada um 'fóssil vivo', a Metasequoia foi descoberta como espécie viva em 1941."
        ]);
        
        Planta::create([
            'nome_comum' => "Milindeira",
            'nome_cientifico' => "Brosimum guianense",
            'familia' => "Moraceae",
            'genero' => "Brosimum",
            'especie' => "Brosimum guianense",
            'categoria'=> "Tropicais",
            'descricao' => "Árvore de médio porte, com folhas verdes, elípticas e frutos pequenos, comestíveis, de coloração amarela.",
            'habitat' => "Florestas tropicais úmidas.",
            'distribuicao_geografica' => "Nativa da América do Sul, especialmente na Amazônia.",
            'observacoes' => "A madeira da milindeira é utilizada na marcenaria e na fabricação de instrumentos musicais."
        ]);
        
        Planta::create([
            'nome_comum' => "Olho de Boneca",
            'nome_cientifico' => "Actaea pachypoda",
            'familia' => "Ranunculaceae",
            'genero' => "Actaea",
            'especie' => "Actaea pachypoda",
            'categoria'=> "",
            'descricao' => "Planta herbácea perene, com folhas compostas, inflorescências racemosas de pequenas flores brancas e frutos brancos esféricos com uma mancha preta, lembrando um olho.",
            'habitat' => "Florestas temperadas.",
            'distribuicao_geografica' => "Nativa da América do Norte.",
            'observacoes' => "Planta tóxica, sendo os frutos especialmente perigosos se ingeridos."
        ]);
        
        Planta::create([
            'nome_comum' => "Palmeira Rabo de Peixe",
            'nome_cientifico' => "Caryota mitis",
            'familia' => "Arecaceae",
            'genero' => "Caryota",
            'especie' => "Caryota mitis",
            'categoria'=> "Ornamentais",
            'descricao' => "Palmeira de pequeno a médio porte, com folhas pinadas que se assemelham à cauda de um peixe.",
            'habitat' => "Florestas tropicais úmidas.",
            'distribuicao_geografica' => "Nativa do sudeste asiático, cultivada em várias regiões tropicais e subtropicais.",
            'observacoes' => "Muito utilizada como planta ornamental em jardins e interiores."
        ]);
        
        Planta::create([
            'nome_comum' => "Pinheiro",
            'nome_cientifico' => "Pinus spp.",
            'familia' => "Pinaceae",
            'genero' => "Pinus",
            'especie' => "Várias espécies dentro do gênero Pinus.",
            'categoria'=> "Temperadas",
            'descricao' => "Árvore conífera, com folhas em forma de agulha e cones que produzem sementes.",
            'habitat' => "Regiões temperadas e boreais.",
            'distribuicao_geografica' => "Nativa do hemisfério norte, com muitas espécies cultivadas em todo o mundo.",
            'observacoes' => "Importante na indústria madeireira e na produção de resina."
        ]);
        
        Planta::create([
            'nome_comum' => "Pitanga",
            'nome_cientifico' => "Eugenia uniflora",
            'familia' => "Myrtaceae",
            'genero' => "Eugenia",
            'especie' => "Eugenia uniflora",
            'categoria'=> "Medicinais, Tropicais",
            'descricao' => "Arbusto ou árvore de pequeno porte, com folhas verdes, brilhantes e ovais, e frutos pequenos, globosos e comestíveis, de cor vermelha ou laranja.",
            'habitat' => "Regiões tropicais e subtropicais.",
            'distribuicao_geografica' => "Nativa da América do Sul, especialmente no Brasil, amplamente cultivada em regiões tropicais e subtropicais.",
            'observacoes' => "A pitanga é muito apreciada pelo seu sabor agridoce e é utilizada na produção de sucos, geleias e sorvetes."
        ]);
        
        Planta::create([
            'nome_comum' => "Podocarpo",
            'nome_cientifico' => "Podocarpus macrophyllus",
            'familia' => "Podocarpaceae",
            'genero' => "Podocarpus",
            'especie' => "Podocarpus macrophyllus",
            'categoria'=> "Ornamentais",
            'descricao' => "Árvore ou arbusto perenifólio, com folhas lineares, verde-escuras, e frutos carnosos e alongados.",
            'habitat' => "Florestas montanhosas e subtropicais.",
            'distribuicao_geografica' => "Nativo do Japão e da China, amplamente cultivado como planta ornamental em várias regiões do mundo.",
            'observacoes' => "O podocarpo é utilizado em paisagismo, especialmente em jardins orientais, e como planta de interior."
        ]);
        
        Planta::create([
            'nome_comum' => "Roseira",
            'nome_cientifico' => "Rosa spp.",
            'familia' => "Rosaceae",
            'genero' => "Rosa",
            'especie' => "Várias espécies dentro do gênero Rosa.",
            'categoria'=> "Ornamentais",
            'descricao' => "Arbustos perenes com hastes espinhosas, folhas compostas e flores vistosas de diversas cores e tamanhos.",
            'habitat' => "Regiões temperadas.",
            'distribuicao_geografica' => "Nativas principalmente do hemisfério norte, com várias espécies cultivadas em todo o mundo.",
            'observacoes' => "As rosas são amplamente cultivadas por suas flores ornamentais e também são utilizadas na produção de perfumes."
        ]);

        Planta::create([
            'nome_comum' => "Tibouchina Clavata",
            'nome_cientifico' => "Tibouchina clavata",
            'familia' => "Melastomataceae",
            'genero' => "Tibouchina",
            'especie' => "Tibouchina clavata",
            'categoria'=> "Ornamentais",
            'descricao' => "Arbusto perene com folhas ovaladas e flores grandes, geralmente de cor roxa ou lilás.",
            'habitat' => "Florestas tropicais.",
            'distribuicao_geografica' => "Nativa da América do Sul, especialmente do Brasil.",
            'observacoes' => "Muito utilizada como planta ornamental devido às suas flores vistosas."
        ]);
        
        Planta::create([
            'nome_comum' => "Uva Japonesa",
            'nome_cientifico' => "Hovenia dulcis",
            'familia' => "Rhamnaceae",
            'genero' => "Hovenia",
            'especie' => "Hovenia dulcis",
            'categoria'=> "Tropicais",
            'descricao' => "Árvore de médio porte, com folhas largas e frutos comestíveis que se assemelham a passas.",
            'habitat' => "Florestas subtropicais.",
            'distribuicao_geografica' => "Nativa do leste da Ásia, cultivada em várias regiões subtropicais e tropicais.",
            'observacoes' => "Os frutos são doces e podem ser consumidos frescos ou secos, sendo também utilizados na medicina tradicional."
        ]);
        
        
    }
}
