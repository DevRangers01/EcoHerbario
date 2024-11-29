<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Herbário</title>
    <link rel="icon" href="{{ asset('storage/img/folhaicon.jpg') }}" type="image/x-icon" />
    @vite(['resources/js/app.js'])
    <style>
        body {
            background-image: url('{{ asset('storage/img/fundo.jpg') }}');
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            height: 100vh;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#plantas">Plantas</a></li>
            </ul>
        </nav>
        <!-- Verifique se o caminho da imagem está correto -->
        <img src="{{ asset('storage/img/linhaverde.jpg') }}" alt="Linha Verde" class="linha-verde">
    </header>

    <section class="hero parallax">
        <h1><span class="eco">Eco</span> <br> <span class="herbario">Herbário</span></h1>
        <p>www.ecoherbariosesi.com.br</p>
    </section>

    <!-- Seção Plantas -->
    <section class="plantas" id="plantas">
        <h2>EXPLORE O MUNDO VERDE COM NOSSO<br>HERBÁRIO VIRTUAL!</h2>
        <div class="cards">
            <div class="card">
                <div class="card-background" style="background-image: url('{{ asset('storage/img/tropicais.jpg') }}');"></div>
                <div class="card-content">
                    <h3>Plantas Tropicais</h3>
                    <p>Conheça a diversidade das plantas tropicais.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-background" style="background-image: url('{{ asset('storage/img/temperadas.jpg') }}');"></div>
                <div class="card-content">
                    <h3>Plantas Temperadas</h3>
                    <p>Explore as plantas que prosperam em climas temperados.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-background" style="background-image: url('{{ asset('storage/img/ornamentais.jpg') }}');"></div>
                <div class="card-content">
                    <h3>Plantas Ornamentais</h3>
                    <p>Descubra as plantas usadas para embelezar ambientes.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-background" style="background-image: url('{{ asset('storage/img/medicinais.jpg') }}');"></div>
                <div class="card-content">
                    <h3>Plantas Medicinais</h3>
                    <p>Saiba mais sobre as plantas com propriedades medicinais.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
