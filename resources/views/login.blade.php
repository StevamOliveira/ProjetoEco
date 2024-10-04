<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="icon" href="folhaicon.png" type="image/x-icon" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    @vite('resources/css/style.css') <!-- Importando CSS com Vite -->
</head>
<body>
    <div class="container">
        <!-- Formulário de Login -->
        <form method="POST" action="/login">
            @csrf <!-- Token CSRF para segurança -->
            <h1>Login</h1>

            <div class="input-box">
                <!-- Campo de e-mail -->
                <input type="email" name="email" placeholder="Insira seu Email" required />
                <i class="bx bxs-envelope"></i> <!-- Ícone de email -->
            </div>
            <div class="input-box">
                <!-- Campo de senha -->
                <input type="password" name="senha" placeholder="Insira sua senha" required />
                <i class="bx bxs-lock-alt"></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox" name="remember" /> Lembrar-me</label>
                <a href="#">Esqueceu a senha?</a>
            </div>

            <!-- Botão de envio do formulário -->
            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Não tem uma conta? <a href="../views/cadastro.html">Cadastre-se aqui!</a></p>
            </div>
        </form>
    </div>

    @vite('resources/js/script.js') <!-- Adicione o JS, se necessário -->
</body>
</html>
