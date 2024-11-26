<?php
// Conectar ao banco de dados
require '../config/config.php';  // Certifique-se de que este arquivo está configurado corretamente

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pegando os campos do formulário
    $name = $_POST['name'];  
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT); // Criptografar a senha

    try {
        // Verificar se o nome de usuário já existe
        $query = "SELECT * FROM users WHERE username = ?";  
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username]);

        if ($stmt->rowCount() > 0) {
            $error_message = "O nome de usuário já existe!";
        } else {
            // Inserir o novo usuário no banco de dados
            $query = "INSERT INTO users (name, username, password) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$name, $username, $password_hash]);

            // Redirecionar para a página de login após o cadastro
            header("Location: login.php");
            exit;
        }
    } catch (PDOException $e) {
        // Capturar erro de conexão ou execução e exibir mensagem
        $error_message = 'Erro ao cadastrar: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }

        .container {
            width: 350px; /* Aumentada a largura */
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
        <?php if (isset($error_message)): ?>
            <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
        <?php endif; ?>
        <form method="POST" action="register.php">
            <input type="text" name="name" placeholder="Nome Completo" required>
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Cadastrar</button>
        </form>
        <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
    </div>
</body>
</html>
