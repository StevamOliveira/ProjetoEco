<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Herbário</title>
    <link rel="icon" href="folhaicon.png" type="image/x-icon" />
    @vite('resources/css/stylelogada.css') <!-- Usando Vite para o CSS -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <!-- O link 'Menu' agora está com href="#" -->
                <li><a href="#">Menu</a></li>
                <!-- O link 'Plantas' leva à seção dos cards de plantas -->
                <li><a href="#plantas">Plantas</a></li>
            </ul>
        </nav>
        <img src="../images/icone_usuario.png" alt="Ícone de Usuário" class="user-icon" onclick="openUserPanel()">
    </header>

    <!-- Seção principal com efeito parallax -->
    <section class="hero parallax">
        <h1><span class="eco">Eco</span> <br> <span class="herbario">Herbário</span></h1>
        <p>www.ecoherbariosesi.com.br</p>
    </section>

    <!-- Seção Plantas -->
    <section class="plantas" id="plantas">
        <h2>EXPLORE O MUNDO VERDE COM NOSSO<br>HERBÁRIO VIRTUAL!</h2>
        <div class="cards">
            <!-- Card 1: Plantas Tropicais -->
            <div class="card">
                <div class="card-background" id="card-image-1" style="background-image: url('resources/css/tropicais.jpg');"></div>
                <div class="card-content">
                    <h3 class="card-title">Plantas Tropicais</h3>
                    <p class="card-description">Conheça a diversidade das plantas tropicais.</p>
                </div>
            </div>
            <!-- Card 2: Plantas Temperadas -->
            <div class="card">
                <div class="card-background" id="card-image-2" style="background-image: url('../images/temperadas.jpg');"></div>
                <div class="card-content">
                    <h3 class="card-title">Plantas Temperadas</h3>
                    <p class="card-description">Explore as plantas que prosperam em climas temperados.</p>
                </div>
            </div>
            <!-- Card 3: Plantas Ornamentais -->
            <div class="card">
                <div class="card-background" id="card-image-3" style="background-image: url('../images/ornamentais.jpg');"></div>
                <div class="card-content">
                    <h3 class="card-title">Plantas Ornamentais</h3>
                    <p class="card-description">Descubra as plantas usadas para embelezar ambientes.</p>
                </div>
            </div>
            <!-- Card 4: Plantas Medicinais -->
            <div class="card">
                <div class="card-background" id="card-image-4" style="background-image: url('../images/medicinais.jpg');"></div>
                <div class="card-content">
                    <h3 class="card-title">Plantas Medicinais</h3>
                    <p class="card-description">Saiba mais sobre as plantas com propriedades medicinais.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Painel lateral de usuário -->
    <div id="userPanel" class="user-panel">
        <button onclick="closeUserPanel()" class="close-btn">&times;</button>
        <div class="user-panel-header">
            <h2>Perfil do usuário</h2>
            <img src="../images/icone_usuario.png" alt="Ícone de Usuário" class="user-icon">
        </div>
        <nav class="user-panel-nav">
            <a href="#">Trocar email</a>
            <a href="#">Alterar foto de perfil</a>
            <a href="#">Privacidade e segurança</a>
            <a href="#">Configurações</a>
            <a href="#" class="logout">Sair da conta</a>
        </nav>
    </div>

    @vite('resources/js/scriptlogada.js') <!-- Usando Vite para o JS -->
</body>
</html>
