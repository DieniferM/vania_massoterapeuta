<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section id="login">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Entrar</button>
        </form>
    </section>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Aqui você faria a verificação do usuário e senha
    // Exemplo básico:
    if ($usuario === 'admin' && $senha === '1234') {
        echo "<p>Login bem-sucedido!</p>";
    } else {
        echo "<p>Usuário ou senha incorretos.</p>";
    }
}
?>
