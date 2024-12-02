<?php
// Iniciar a sessão
session_start();

// Verificar se o usuário já está logado
if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit;
}

// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conectar ao banco de dados
    require '../config/config.php'; // Certifique-se de que esse arquivo tem as credenciais de banco de dados
    
    try {
        // Receber os dados do formulário
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Consultar no banco de dados
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username]);

        // Verificar se o usuário existe
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verificar a senha
            if (password_verify($password, $user['password'])) {
                // Login bem-sucedido, redirecionar para a home
                $_SESSION['user'] = $user['username']; // Guardar usuário na sessão
                header("Location: home.php");
                exit;
            } else {
                // Senha incorreta
                $error_message = "Senha incorreta!";
            }
        } else {
            // Usuário não encontrado
            $error_message = "Usuário não encontrado!";
        }
    } catch (PDOException $e) {
        $error_message = "Erro ao conectar ao banco de dados: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <h1>Login</h1>
        <?php if (isset($error_message)): ?>
            <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
        <?php endif; ?>
        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <p>Ainda não tem conta? <a href="register.php">Cadastre-se</a></p>
    </div>
</body>
</html>
