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
    if (!$userController->userExists($username)) {
        echo "<div class='container error'>Usuário não encontrado. <a href='login.php'>Clique aqui para tentar novamente.</a></div>";
    } else {
        // Verificando se a senha está correta
        if ($userController->verifyPassword($username, $password)) {
            // Redireciona para a página home ao logar com sucesso
            header("Location: home.php");
            exit;
        } else {
            echo "<div class='container error'>Senha incorreta. <a href='login.php'>Clique aqui para tentar novamente.</a></div>";
        }
    }
}
?>
