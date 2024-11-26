<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION['user'])) {
    header("Location: login.php"); // Redireciona para o login caso não esteja logado
    exit;
}

echo "<h1>Bem-vindo, " . $_SESSION['user'] . "!</h1>";
?>


<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="styles.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Criada com Sucesso</title>
    <link rel="stylesheet" href="styles.css"> <!-- Referência ao seu arquivo de CSS -->
</head>
<body>
    <div class="container success">
        <h2>Conta criada com sucesso!</h2>
        <a href="login.php">Clique aqui para fazer login.</a>
    </div>
</body>
</html>
