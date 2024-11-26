<?php
// Iniciar a sessão
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user'])) {
    // Se não estiver logado, redirecionar para a página de login
    header("Location: login.php");
    exit;
}

// Obter o nome do usuário logado
$username = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Mundo do Hardware</title>
    <link rel="stylesheet" href="styles.css"> <!-- Certifique-se de referenciar o arquivo CSS -->
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <h1>Minha Biblioteca de Hardware</h1>
        </div>
        <div class="header-buttons">
            <a href="list.php"><button>Ir para Lista</button></a>
            <a href="logout.php"><button>Deslogar</button></a>
        </div>
    </header>

    <!-- Conteúdo Principal -->
    <div class="main-content">
        <div class="welcome-message">
            <h2>Bem-vindo, <?php echo htmlspecialchars($username); ?>!</h2> <!-- Exibe o nome do usuário logado -->
            <p>
                Explore o fascinante mundo do hardware de computadores. Aqui, você encontrará uma
                ampla seleção de peças essenciais para montagem, manutenção e otimização de PCs.
            </p>
            <p>
                Navegue pela nossa lista de produtos para descobrir componentes de alta qualidade,
                desde placas de vídeo poderosas até memórias RAM de alta performance.
            </p>
        </div>
    </div>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2024 Minha Biblioteca de Hardware. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
