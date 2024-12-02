<?php
// src/views/edit.php
require_once __DIR__ . '/../src/controllers/ProductController.php';

$controller = new ProductController();

// Verifica se o id foi passado pela URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "ID inválido!";
    exit;
}

// Obtém o produto com base no ID
$product = $controller->viewProduct($_GET['id']);

// Verifica se o produto foi encontrado
if (!$product) {
    echo "Produto não encontrado!";
    exit;
}

// Quando o formulário é enviado, processa os dados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Prepara os dados a serem salvos
    $data = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'price' => $_POST['price']
    ];

    // Chama a função de editar o produto
    $controller->editProduct($_GET['id'], $data);

    // Redireciona para a lista de produtos após a atualização
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Editar Produto</h1>
    </header>

    <div class="main-content">
        <div class="form-container">
            <!-- Formulário de Edição -->
            <form action="edit.php?id=<?= htmlspecialchars($product['id']) ?>" method="post">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <textarea id="description" name="description" required><?= htmlspecialchars($product['description']) ?></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Preço:</label>
                    <input type="number" id="price" name="price" step="0.01" value="<?= htmlspecialchars($product['price']) ?>" required>
                </div>

                <button type="submit">Salvar</button>
            </form>
            <a href="index.php">Voltar à lista</a>
        </div>
    </div>

    <footer>
        <p>© 2024 Nossa bliblioteca de hardware. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
