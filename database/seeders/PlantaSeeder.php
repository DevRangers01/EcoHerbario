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
            'metodo_de_cultivo'=> "1. Escolha da Semente
             Use o caroço de um abacate maduro. Enxágue para remover a polpa restante.
             Enfie 3-4 palitos ao redor do caroço para que ele fique meio submerso em água.
             2. Germinação
             Coloque o caroço em um copo com água, com a parte mais larga voltada para baixo.
             Deixe o copo em um local iluminado e troque a água a cada 2-3 dias.
             Em 2-6 semanas, a raiz começará a brotar na parte inferior, e uma haste surgirá na parte superior.
             3. Plantio no Solo
             Quando a muda tiver de 15-20 cm, plante-a em um vaso com solo bem drenado e rico em nutrientes.
             Plante de forma que metade do caroço fique exposto.
             4. Rega e Cuidados
             Mantenha o solo úmido, mas não encharcado.
             Abacateiros gostam de luz indireta e precisam de proteção contra o vento.
             5. Paciência!
             Um abacateiro pode demorar 3 a 10 anos para frutificar, dependendo das condições e do tipo de abacate cultivado.",
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
           'metodo_de_cultivo'=> "1. Escolha da Semente ou Muda
            A amacuca pode ser cultivada a partir de sementes ou mudas, sendo que as mudas tendem a crescer mais rápido.
            Escolha sementes saudáveis ou mudas vigorosas para garantir um bom desenvolvimento da planta.
            2. Preparação do Solo
            Prefira solos ricos em matéria orgânica, com boa drenagem. A amacuca gosta de solos levemente ácidos a neutros.
            Antes de plantar, misture composto orgânico ou húmus para nutrir o solo.
            3. Plantio
            Se usar sementes, plante a uma profundidade de 1-2 cm e mantenha o solo úmido até a germinação.
            No caso de mudas, plante em solo preparado, deixando o caule bem firme, sem enterrar muito.
            4. Rega e Cuidados
            A amacuca prefere solos úmidos, então regue regularmente, mas evite encharcar.
            Coloque a planta em um local com luz indireta ou meia-sombra, pois ela não suporta sol direto.
            5. Manutenção
            Realize podas leves para controlar o tamanho e estimular o crescimento de novas folhas.
            Fertilize a cada dois meses com fertilizante orgânico para manter a planta saudável.",
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
            'metodo_de_cultivo'=> "1. Escolha da Muda
            A amora é normalmente cultivada a partir de mudas ou estacas, que são mais fáceis de crescer do que a partir de sementes.
            Escolha uma muda saudável em um viveiro ou corte uma estaca de uma planta madura.
            2. Preparação do Solo
            A amora prefere solo bem drenado e rico em matéria orgânica.
            O pH ideal está entre 5,5 e 6,5. Misture composto ou adubo ao solo antes do plantio.
            3. Plantio no Solo
            Cave um buraco maior que o torrão da muda para que as raízes fiquem soltas.
            Plante em local ensolarado e mantenha cerca de 1 metro de distância entre cada muda, caso plante mais de uma.
            4. Rega e Cuidados
            Regue regularmente, mas evite encharcar o solo. Amoras gostam de solo úmido, especialmente no primeiro ano de crescimento.
            Remova ervas daninhas ao redor da planta e pode os ramos velhos após o primeiro ano para incentivar novos brotos.
            5. Colheita
            As amoras geralmente frutificam após o segundo ano de plantio.
            Colha as frutas maduras quando estiverem completamente escuras e macias ao toque.",
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
            'metodo_de_cultivo'=> "1. Escolha da Semente ou Muda
            O cultivo geralmente é feito a partir de mudas, pois a germinação de sementes pode ser mais demorada.
            Adquira mudas de viveiros especializados para garantir plantas saudáveis e bem adaptadas.
            2. Escolha do Solo
            A Árvore de Ferro prefere solos bem drenados e levemente ácidos, mas se adapta a diferentes tipos de solo, desde que bem férteis.
            Prepare o solo misturando composto orgânico ou adubo para garantir nutrientes suficientes.
            3. Plantio no Solo
            Plante a muda em local que receba luz solar direta ou sombra parcial, preferencialmente em um espaço amplo, pois a árvore pode crescer até 10 metros de altura.
            Mantenha um espaçamento adequado de outras plantas ou árvores para permitir o desenvolvimento pleno.
            4. Rega e Cuidados
            Regue a muda regularmente, principalmente nos primeiros anos, mantendo o solo úmido, mas sem encharcar.
            Após o estabelecimento, a árvore tolera períodos curtos de seca.
            5. Manutenção
            A Árvore de Ferro não exige muita poda, mas é possível remover galhos secos ou danificados para promover um crescimento saudável.
            Adubar no início da primavera ajuda a fortalecer a árvore para o período de crescimento.",
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
            'metodo_de_cultivo'=> "1. Escolha da Muda
            Selecione uma muda saudável de bambuzinho (Bambusa gracilis ou Phyllostachys aurea). Você pode comprá-la em viveiros ou obter uma divisão de uma planta já estabelecida.
            2. Preparação do Solo
            O bambuzinho cresce bem em solo fértil, bem drenado e com boa quantidade de matéria orgânica.
            Misture um pouco de composto orgânico ao solo para fornecer nutrientes extras.
            3. Plantio
            Cave um buraco duas vezes maior que o tamanho da raiz da muda.
            Coloque a muda no buraco, cubra com terra e compacte levemente para fixá-la.
            4. Rega e Cuidados
            Mantenha o solo úmido, mas evite encharcá-lo.
            O bambuzinho aprecia luz solar parcial, mas também tolera sombra parcial.
            5. Manutenção e Podas
            Remova galhos secos ou danificados para incentivar o crescimento saudável.
            Em ambientes externos, o bambuzinho pode se expandir rapidamente, então controle o crescimento se precisar limitar o espaço.",
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
            'metodo_de_cultivo'=> "1. Escolha da Semente
            Use uma muda de banana de macaco ou um broto retirado de uma planta adulta. A planta não é cultivada a partir de sementes, mas sim por mudas ou bromos que crescem ao redor da planta mãe.
            2. Germinação
            Se você usar um broto, retire-o cuidadosamente da planta mãe, certificando-se de que tenha raízes.
            Coloque o broto em um recipiente com água por alguns dias para ajudar a estabelecer as raízes, se necessário.
            3. Plantio no Solo
            Plante a muda ou broto em um solo bem drenado e rico em matéria orgânica, em um local com bastante luz solar.
            Certifique-se de que o fundo do buraco tenha uma boa drenagem e plante a muda de modo que a base da planta fique nivelada com o solo.
            4. Rega e Cuidados
            Mantenha o solo úmido, mas evite o encharcamento.
            A Banana de Macaco gosta de climas quentes e úmidos, então é importante garantir uma boa irrigação, especialmente em períodos de seca.
            5. Paciência!
            A Banana de Macaco pode demorar de 18 meses a 2 anos para começar a produzir frutos, dependendo das condições de cultivo e do clima.",
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
            'metodo_de_cultivo'=> "1. Escolha da Semente
            Use sementes de buchinho, que podem ser encontradas em viveiros especializados.
            Escolha sementes firmes e de boa qualidade para garantir uma boa germinação.
            2. Germinação
            Plante as sementes em um recipiente com solo bem drenado.
            Cubra levemente as sementes com terra, mantendo o solo úmido, mas não encharcado.
            Coloque o recipiente em um local com luz indireta.
            3. Plantio no Solo
            Quando as mudas atingirem cerca de 5 a 10 cm, elas podem ser transplantadas para o solo ou para vasos maiores.
            Plante as mudas a uma distância de 30 a 40 cm uma da outra, pois o buchinho pode crescer e se expandir.
            4. Rega e Cuidados
            O buchinho precisa de regas frequentes, mas o solo deve estar bem drenado para evitar o apodrecimento das raízes.
            Ele se adapta bem a diferentes tipos de solo, desde que não seja excessivamente úmido.
            5. Paciência!
            O buchinho cresce lentamente, mas é uma planta resistente. Em um ano, você já pode perceber o seu crescimento e forma. Pode demorar mais para atingir a altura máxima de 1 a 2 metros.",
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
            'metodo_de_cultivo'=> "1. Escolha da Muda
            A Costela de Adão pode ser cultivada a partir de mudas tiradas de ramos que tenham raízes aéreas.
            Você pode cortar um pedaço saudável da planta, preferencialmente com uma raiz aérea visível.
            2. Enraizamento
            Coloque a muda em um recipiente com água, submergindo apenas a parte que possui a raiz aérea.
            Mantenha o recipiente em um local com luz indireta e troque a água a cada 2-3 dias.
            Em algumas semanas, as raízes vão crescer, e a planta estará pronta para ser plantada no solo.
            3. Plantio no Solo
            Quando as raízes estiverem com cerca de 5 cm ou mais, plante a muda em um vaso com solo bem drenado e rico em matéria orgânica.
            Coloque a planta no vaso de forma que as raízes fiquem bem cobertas pelo solo.
            4. Rega e Cuidados
            Regue a planta regularmente, mas sem encharcar o solo. Deixe o solo secar levemente entre as regas.
            A Costela de Adão prefere luz indireta e temperaturas quentes, então evite colocá-la em locais com luz solar direta ou em ambientes muito frios.
            5. Paciência!
            Embora a Costela de Adão cresça relativamente rápido, pode levar algum tempo para que ela se desenvolva totalmente e apresente suas folhas grandes e recortadas características.",
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
            'metodo_de_cultivo'=> "1. Escolha da Semente
            Para cultivar o Dente de Tigre, comece com sementes frescas da planta. Caso você não tenha sementes, pode tentar a propagação por divisão de touceiras.
            2. Germinação
            Se for usar sementes, plante-as em solo bem drenado, cobrindo-as levemente. Mantenha o solo úmido, mas sem encharcar.
            A germinação ocorre em torno de 2 a 3 semanas, dependendo das condições de temperatura e umidade.
            3. Plantio no Solo
            Após a germinação, transfira as mudas para vasos ou diretamente para o solo. Escolha um local com boa luminosidade, mas sem exposição direta ao sol intenso.
            Plante a muda com a base da raiz bem fixada no solo.
            4. Rega e Cuidados
            Regue regularmente, mantendo o solo ligeiramente úmido. Evite encharcar, pois o Dente de Tigre não tolera excesso de água.
            Essa planta também se beneficia de fertilização periódica, especialmente durante a estação de crescimento.
            5. Paciência!
            O Dente de Tigre pode demorar de 1 a 2 anos para atingir um tamanho ideal, mas com os cuidados certos, ela cresce rapidamente e se torna uma planta robusta.",
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
            'metodo_de_cultivo'=> "1. Escolha da Muda
            A Dracena pode ser propagada por estacas ou comprada como muda. Se optar por estacas, escolha um ramo saudável de uma planta madura.
            Corte uma estaca com cerca de 15-20 cm de comprimento, certificando-se de que tenha pelo menos 2-3 nós (lugares onde as folhas se prendem ao caule).
            2. Enraizamento
            Coloque a estaca em um recipiente com água, cobrindo o nó inferior. Troque a água a cada 2-3 dias.
            Em algumas semanas, as raízes começarão a surgir.
            3. Plantio no Solo
            Quando as raízes estiverem desenvolvidas (em torno de 5 cm ou mais), plante a Dracena em um vaso com solo bem drenado.
            O solo ideal é leve e não deve reter muita água, pois a Dracena prefere solo seco entre as regas.
            4. Rega e Cuidados
            Regue moderadamente, deixando o solo secar um pouco entre as regas. Evite o excesso de água, pois pode apodrecer as raízes.
            Coloque a Dracena em um local com luz indireta e evite exposição direta ao sol forte.
            5. Paciência!
            A Dracena crescerá lentamente, mas pode alcançar 1-2 metros de altura em ambientes internos se bem cuidada.",
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
            'metodo_de_cultivo'=> "1. Escolha da Muda
            A Dracena Malaia é geralmente cultivada a partir de mudas, que podem ser adquiridas em viveiros ou retiradas de uma planta mãe saudável.
            Escolha uma muda com raízes bem formadas e folhas verdes.
            2. Preparação do Solo
            Plante a Dracena em um solo bem drenado e levemente ácido. Misturas para plantas de interior ou solo para cactos também funcionam bem.
            Coloque pedras no fundo do vaso para garantir a drenagem.
            3. Plantio
            Plante a muda em um vaso com pelo menos 25 cm de profundidade, de modo que a base da planta fique a cerca de 2-3 cm abaixo da borda do vaso.
            Complete o vaso com a terra, compactando ligeiramente para evitar buracos de ar.
            4. Rega e Cuidados
            A Dracena Malaia prefere solo ligeiramente seco entre as regas, então regue moderadamente. Evite deixar o solo encharcado.
            Mantenha a planta em um local com luz indireta e temperaturas amenas (entre 18°C e 24°C).
            5. Paciência!
            Embora cresça lentamente, a Dracena Malaia pode atingir até 2 metros de altura, com o tempo.
            Não espere flores rapidamente, pois ela leva alguns anos para florescer, se for o caso.",
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
            'metodo_de_cultivo'=> "1. Escolha da Semente
            Compre sementes de girassol em uma loja de jardinagem ou utilize sementes de girassóis maduros.
            Escolha sementes grandes e firmes para garantir uma boa germinação.
            2. Germinação
            Plante as sementes em solo bem drenado, cerca de 2 a 3 cm de profundidade.
            Mantenha o solo ligeiramente úmido durante o processo de germinação.
            O girassol germina rapidamente, geralmente em 7 a 10 dias, dependendo da temperatura e umidade.
            3. Plantio no Solo
            Quando as mudas atingirem cerca de 10 cm de altura, elas podem ser transferidas para um local definitivo com boa exposição solar.
            Plante-as com uma distância de 30 a 40 cm entre cada uma, para garantir que cresçam sem competição por espaço.
            4. Rega e Cuidados
            Regue o girassol regularmente, mantendo o solo úmido, mas não encharcado.
            Girassóis precisam de sol direto por pelo menos 6 horas por dia para crescer bem.
            Fertilize uma vez por mês com um fertilizante equilibrado.
            5. Paciência!
            O girassol geralmente floresce em cerca de 70 a 90 dias após o plantio das sementes.
            Após a floração, as sementes podem ser colhidas para consumo ou replantio.",
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
            'metodo_de_cultivo'=> "1. Escolha da Semente
            Use uma goiaba madura e retire as sementes de dentro da fruta.
            Lave bem as sementes para remover qualquer resíduo de polpa.
            2. Germinação
            Coloque as sementes de goiaba em um recipiente com água morna e deixe de molho por 24 horas.
            Após o molho, plante as sementes em um vaso com terra bem adubada e bem drenada.
            Cubra levemente as sementes com uma camada fina de terra.
            3. Plantio no Solo
            Transplante as mudas de goiaba para o solo quando elas tiverem pelo menos 10 cm de altura.
            Plante-as em um local ensolarado, com boa circulação de ar e solo fértil.
            Deixe um espaçamento de pelo menos 2-3 metros entre as plantas.
            4. Rega e Cuidados
            Regue com regularidade, mas sem encharcar o solo.
            Durante o crescimento, a goiabeira precisa de sol pleno, então certifique-se de que ela receba luz direta durante o dia.
            5. Paciência!
            A goiabeira pode começar a frutificar entre 2 a 4 anos após o plantio, dependendo das condições de cultivo e da variedade.",
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
            'metodo_de_cultivo'=> "1. Escolha da Semente
            Utilize sementes de uma laranja Pocam madura.
            Remova a polpa da fruta, lave bem as sementes e seque-as.
            2. Germinação
            Coloque as sementes em um recipiente com terra leve e bem drenada.
            Plante as sementes a uma profundidade de 1-2 cm e regue levemente.
            Mantenha o recipiente em um local quente e com boa luminosidade. O processo de germinação pode levar de 2 a 4 semanas.
            3. Plantio no Solo
            Quando as mudas atingirem 10-15 cm de altura, é hora de plantá-las no solo ou em um vaso maior.
            O solo ideal deve ser bem drenado, rico em matéria orgânica e com pH levemente ácido (em torno de 6 a 6,5).
            Plante as mudas com o colo da planta (a parte onde a raiz encontra o caule) acima da linha do solo.
            4. Rega e Cuidados
            Regue regularmente, mantendo o solo úmido, mas não encharcado.
            As laranjeiras Pocam gostam de luz solar direta, por isso, plante-as em um local com boa exposição ao sol.
            Fertilize uma vez por mês com adubo balanceado, preferencialmente no início da primavera.
            5. Paciência!
            A Laranja Pocam começa a frutificar geralmente entre 3 e 5 anos após o plantio, dependendo das condições de cultivo.",
            'distribuicao_geografica'=> "Nativa do sudeste asiático, amplamente cultivada em regiões subtropicais e tropicais.",
            'observacoes'=> "A laranja-pocam, ou tangerina, é muito apreciada pelo seu sabor doce e refrescante."
        ]);

        Planta::create([
            'nome_comum'=> "Limão-taiti",
            'nome_cientifico'=> "Citrus × latifolia",
            'familia'=> "Rutaceae",
            'genero'=> "Citrus",
            'especie'=> "Citrus × latifolia",
            'categoria'=> "Tropicais",
            'descricao'=> "Árvore de pequeno porte, com folhas verdes, flores brancas e perfumadas, e frutos esféricos, de casca verde e polpa ácida.",
            'habitat'=> "Regiões tropicais e subtropicais.",
            'metodo_de_cultivo'=> "1. Escolha da Semente
            Use uma semente de limão Taiti de uma fruta madura.
            Retire a semente da fruta e enxágue bem para remover qualquer polpa residual.
            2. Germinação
            Coloque a semente em um prato ou recipiente com um pouco de água ou envolva em papel toalha úmido.
            Mantenha em um local quente e úmido, trocando a água ou umedecendo o papel toalha regularmente.
            Em 1-2 semanas, a semente começará a brotar.
            3. Plantio no Solo
            Quando a raiz surgir e a muda tiver cerca de 5-10 cm, transfira para um vaso com solo bem drenado.
            Plante a muda de forma que a parte superior da semente fique ligeiramente abaixo do nível do solo.
            4. Rega e Cuidados
            Regue regularmente, mas evite o excesso de água para não apodrecer as raízes.
            O limoeiro Taiti precisa de muita luz solar direta, então escolha um local ensolarado para o cultivo.
            5. Paciência!
            O limão Taiti geralmente leva de 2 a 4 anos para começar a produzir frutos, dependendo das condições de cultivo.",
            'distribuicao_geografica'=> "Híbrido originado na Ásia, amplamente cultivado em regiões tropicais e subtropicais.",
            'observacoes'=> "O limão-taiti é amplamente utilizado na culinária e na produção de bebidas."
        ]);

        Planta::create([
            'nome_comum'=> "Lirío da Paz",
            'nome_cientifico'=> "Spathiphyllum wallisii",
            'familia'=> "Liliaceae",
            'genero'=> "Lilium", 
            'especie'=> "Lilium candidum",
            'categoria'=> "Ornamentais, Temperadas",
            'descricao'=> "Planta herbácea perene, com folhas lanceoladas e flores grandes, brancas e perfumadas, em forma de trombeta.",
            'habitat'=> "Regiões temperadas.",
            'metodo_de_cultivo'=> "1. Escolha da Muda
            O Lirío da Paz é cultivado a partir de mudas, que podem ser adquiridas em viveiros ou criadas a partir de divisão de touceiras.
            Escolha mudas com raízes saudáveis e folhas verdes.
            2. Preparação do Solo
            Plante em solo bem drenado, enriquecido com matéria orgânica. O Lirío da Paz prefere solos ácidos ou levemente ácidos.
            Se estiver plantando em vaso, certifique-se de que haja furos de drenagem.
            3. Plantio
            Plante a muda a uma profundidade que cubra as raízes e mantenha a base da planta no nível do solo.
            Se estiver plantando em vasos, escolha um tamanho adequado para o crescimento da planta.
            4. Rega e Cuidados
            Mantenha o solo úmido, mas não encharcado. Evite que a água fique acumulada no prato do vaso.
            O Lirío da Paz prefere luz indireta e ambientes frescos. Evite exposição direta ao sol forte.
            5. Paciência!
            O Lirío da Paz pode começar a florescer em 3-4 meses, desde que receba os cuidados necessários. Suas flores brancas e vistosas são o destaque da planta!",
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
            'metodo_de_cultivo'=> "1. Escolha da Semente
            Use o caroço de uma manga madura. Retire a polpa com cuidado e lave bem o caroço.
            Retire a casca dura que envolve a semente (pode ser feita com uma faca ou lâmina afiada).
            2. Germinação
            Coloque o caroço em um recipiente com terra úmida, deixando a semente parcialmente exposta.
            Mantenha o recipiente em um local quente e iluminado, mas sem exposição direta ao sol.
            Em algumas semanas, a semente começará a brotar, e você verá a raiz e a muda emergindo.
            3. Plantio no Solo
            Quando a muda tiver cerca de 10-15 cm de altura, ela pode ser transplantada para o solo, se o clima permitir.
            Escolha um local com boa drenagem e bastante sol, já que a mangueira precisa de luz solar para crescer bem.
            Aprofunde a muda na terra, cobrindo-a parcialmente, com o solo ao redor firmemente pressionado.
            4. Rega e Cuidados
            Mantenha o solo úmido, especialmente nos primeiros meses, mas evite o excesso de água.
            Mangueiras exigem solo bem drenado e podem se beneficiar de fertilização ocasional com adubo orgânico.
            5. Paciência!
            Uma mangueira pode levar de 3 a 6 anos para começar a produzir frutos, dependendo das condições e da variedade.",
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
            'metodo_de_cultivo'=> "1. Escolha da Semente
            Use as sementes de um maracujá maduro. Retire as sementes da polpa e lave bem para remover qualquer resíduo.
            2. Germinação
            Coloque as sementes em um recipiente com água morna por 24 horas para amolecer a casca.
            Plante as sementes em um canteiro ou vaso com solo bem drenado e rico em matéria orgânica.
            As sementes devem ser plantadas a uma profundidade de cerca de 1-2 cm.
            3. Plantio no Solo
            Após a germinação (que ocorre em 10-15 dias), transplante as mudas para um local com bastante luz solar.
            O maracujá precisa de espaço para crescer, então, plante as mudas com pelo menos 2 metros de distância uma da outra.
            4. Rega e Cuidados
            Regue regularmente, mas evite o encharcamento do solo. O maracujá gosta de solo úmido, mas bem drenado.
            Forneça suporte, como uma treliça ou cerca, para que a planta suba e se espalhe.
            5. Paciência!
            O maracujá começa a frutificar normalmente entre 1 a 2 anos após o plantio, dependendo das condições de cultivo.",
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
            'metodo_de_cultivo'=> "",
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
            'metodo_de_cultivo'=> "",
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
            'metodo_de_cultivo'=> "",
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
            'metodo_de_cultivo'=> "",
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
            'metodo_de_cultivo'=> "",
            'distribuicao_geografica' => "Nativa do sudeste asiático, cultivada em várias regiões tropicais e subtropicais.",
            'observacoes' => "Muito utilizada como planta ornamental em jardins e interiores."
        ]);
        
        Planta::create([
            'nome_comum' => "Pinheiro",
            'nome_cientifico' => "Pinus.",
            'familia' => "Pinaceae",
            'genero' => "Pinus",
            'especie' => "Várias espécies dentro do gênero Pinus.",
            'categoria'=> "Temperadas",
            'descricao' => "Árvore conífera, com folhas em forma de agulha e cones que produzem sementes.",
            'metodo_de_cultivo'=> "",
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
            'metodo_de_cultivo'=> "",
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
            'metodo_de_cultivo'=> "",
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
            'metodo_de_cultivo'=> "",
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
            'metodo_de_cultivo'=> "",
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
            'metodo_de_cultivo'=> "",
            'distribuicao_geografica' => "Nativa do leste da Ásia, cultivada em várias regiões subtropicais e tropicais.",
            'observacoes' => "Os frutos são doces e podem ser consumidos frescos ou secos, sendo também utilizados na medicina tradicional."
        ]);
        
        
    }
}
