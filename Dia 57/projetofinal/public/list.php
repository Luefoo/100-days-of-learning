<?php
// Iniciar a sessão
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

// Lista fictícia de produtos para demonstração
$products = [
    ['id' => 1, 'name' => 'Placa de Vídeo NVIDIA RTX 3090', 'description' => '24GB GDDR6X, Ray Tracing', 'price' => 'R$ 12.500'],
    ['id' => 2, 'name' => 'Processador Intel Core i9-13900K', 'description' => '24 núcleos, 32 threads', 'price' => 'R$ 4.500'],
    ['id' => 3, 'name' => 'Placa-Mãe ASUS ROG STRIX Z790', 'description' => 'Suporte DDR5, PCIe 5.0', 'price' => 'R$ 3.200'],
    ['id' => 4, 'name' => 'Memória RAM Corsair 32GB DDR5', 'description' => '2x16GB, 5600MHz', 'price' => 'R$ 1.600'],
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Peças de Computador Disponíveis</h1>
    </header>
    <div class="table-container">
        <a href="create.php">Adicionar Novo Produto</a> | 
        <a href="logout.php">Efetuar Logout</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= htmlspecialchars($product['id']) ?></td>
                        <td><?= htmlspecialchars($product['name']) ?></td>
                        <td><?= htmlspecialchars($product['description']) ?></td>
                        <td><?= htmlspecialchars($product['price']) ?></td>
                        <td>
                            <a href="edit.php?id=<?= htmlspecialchars($product['id']) ?>">Editar</a> |
                            <a href="delete.php?id=<?= htmlspecialchars($product['id']) ?>" 
                               onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
