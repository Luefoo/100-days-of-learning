<?php
// src/views/list.php
require_once __DIR__ . '/../src/controllers/ProductController.php';

$controller = new ProductController();

// Verifica se o id do produto para excluir foi passado
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $productId = $_GET['delete'];
    // Chama o método para excluir o produto
    $controller->deleteProduct($productId);
    // Redireciona de volta para a página de lista após a exclusão
    header('Location: list.php');
    exit;
}

// Lista todos os produtos
$products = $controller->listProducts();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilo da Página List */
        .table-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1000px; /* Largura máxima do container */
            margin: 50px auto; /* Centraliza o container */
            text-align: center;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table-container table th, .table-container table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .table-container table th {
            background-color: #003d99;
            color: white;
        }

        .table-container table tr:nth-child(even) {
            background-color: #f0faff;
        }

        .table-container table tr:hover {
            background-color: #4f93ff;
            color: white;
        }

        .table-container a {
            color: white;
            background-color: #4f93ff;
            padding: 10px 15px;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .table-container a:hover {
            background-color: #0066cc;
        }

        .table-container .btn-action {
            margin: 10px;
            display: inline-block;
        }

        .btn-home {
            display: block;
            margin: 20px auto; /* Centraliza o botão */
            padding: 12px 18px;
            background-color: #0066cc;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            text-align: center;
            width: 200px;
            transition: background-color 0.3s ease;
        }

        .btn-home:hover {
            background-color: #004d99;
        }
    </style>
</head>
<body>
    <header>
        <h1>Lista de Produtos</h1>
    </header>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= htmlspecialchars($product['name']) ?></td>
                        <td><?= htmlspecialchars($product['description']) ?></td>
                        <td><?= htmlspecialchars($product['price']) ?></td>
                        <td>
                            <!-- Link para editar o produto -->
                            <a href="edit.php?id=<?= $product['id'] ?>" class="btn-action">Editar</a>
                            <!-- Link para excluir o produto -->
                            <a href="list.php?delete=<?= $product['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')" class="btn-action">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="create.php" class="btn-action">Adicionar Novo Produto</a>
    </div>

    <!-- Botão Voltar para Home -->
    <a href="home.php" class="btn-home">Voltar para Home</a>

    <footer>
        <p>© 2024 Nossa biblioteca de hardware. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
