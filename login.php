<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Teste</title>
    <link rel="stylesheet" href="Assets/style.css">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="auth.php" method="post">
            <div class="grupo-input">
                <label>Usuário</label>
                <input type="text"
                name="username"
                required
                placeholder="Digite seu nome de usuário"
                minlength="3"
                maxlength="50">
            </div>
            <div class="grupo-input">
                <label>Senha</label>
                <input type="password"
                name="password"
                required
                placeholder="Digite sua senha">
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>