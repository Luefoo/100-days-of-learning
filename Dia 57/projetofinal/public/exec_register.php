<?php
include_once('../src/controllers/UserController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificando se os campos foram preenchidos corretamente
    $name = isset($_POST['name']) ? trim($_POST['name']) : null;
    $username = isset($_POST['username']) ? trim($_POST['username']) : null;
    $password = isset($_POST['password']) ? trim($_POST['password']) : null;

    // Depuração: Verificando o que está sendo recebido
    var_dump($name, $username, $password);

    // Verificando se os campos não estão vazios
    if (!$name || !$username || !$password) {
        echo "Todos os campos são obrigatórios!";
        exit;
    }

    $userController = new UserController();
    
    // Verificando se o nome de usuário já existe
    if ($userController->userExists($username)) {
        echo "Usuário já existe. <a href='register.php'>Clique aqui para tentar novamente.</a>";
    } else {
        // Registrando o usuário
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        if ($userController->register($name, $username, $hashedPassword)) {
            echo "Conta criada com sucesso! <a href='login.php'>Clique aqui para fazer login.</a>";
        } else {
            echo "Erro ao criar a conta!";
        }
    }
}
?>
