<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="icon" href="folhaicon.png" type="image/x-icon" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    @vite('resources/css/style.css') <!-- Referência ao Vite -->
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <form method="POST" action="/cadastro"> <!-- Altere a ação para /cadastro -->
            @csrf
            <div class="input-box">
                <input type="text" name="nome" placeholder="Nome completo" required /> <!-- Adicione o atributo name -->
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="E-mail" required /> <!-- Adicione o atributo name -->
                <i class="bx bxs-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" name="senha" placeholder="Insira sua senha" required /> <!-- Adicione o atributo name -->
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirme sua senha" required /> <!-- Mantenha sem name se não precisar -->
                <i class="bx bxs-lock-alt"></i>
            </div>

            <button type="submit">Cadastrar</button> <!-- Botão de envio -->

            <div class="register-link">
                <p>Já tem uma conta? <a href="/login">Faça login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
