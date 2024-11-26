<?php
include_once('../src/controllers/UserController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificando se os campos foram preenchidos corretamente
    $username = isset($_POST['username']) ? trim($_POST['username']) : null;
    $password = isset($_POST['password']) ? trim($_POST['password']) : null;

    // Depuração: Verificando o que está sendo recebido
    var_dump($username, $password);

    // Verificando se os campos não estão vazios
    if (!$username || !$password) {
        echo "<div class='container error'>Todos os campos são obrigatórios!</div>";
        exit;
    }

    $userController = new UserController();

    // Verificando se o nome de usuário existe
    if ($userController->userExists($username)) {
        // Se o usuário já existe, exibe a mensagem de erro
        echo "<div class='container error'>Este usuário já existe. <a href='login.php'>Clique aqui para tentar novamente.</a></div>";
    } else {
        // Tentando criar o usuário
        try {
            if ($userController->createUser($username, $password, /* adicione aqui o terceiro parâmetro necessário */)) {
                echo "<div class='container success'>Conta criada com sucesso! <a href='login.php'>Clique aqui para fazer login.</a></div>";
            } else {
                // Se falhar ao criar, redireciona para a página de erro
                header("Location: error.php");
                exit;
            }
        } catch (Exception $e) {
            // Em caso de erro, redireciona para a página de erro
            header("Location: error.php");
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
    <link rel="stylesheet" href="styles.css"> <!-- Referencia ao seu CSS -->
</head>
<body>
    <div class="container error">
        <h2>Ocorreu um erro. Por favor, tente novamente mais tarde.</h2>
        <a href="login.php">Voltar para a página de login</a>
    </div>
</body>
</html>
