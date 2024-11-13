<?php
// src/views/edit.php

require_once __DIR__ . '/../src/controllers/ProductController.php';

$controller = new ProductController();

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$product = $controller->viewProduct($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->editProduct($_GET['id'], $_POST);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <form action="edit.php?id={{ $product['id'] }}" method="post">
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" value="{{ $product['name'] }}"><br><br>

        <label for="description">Descrição:</label><br>
        <textarea id="description" name="description">{{ $product['description'] }}</textarea><br><br>

        <label for="price">Preço:</label><br>
        R$<input type="text" id="price" name="price" step=".01" value="{{ $product['price'] }}"><br><br>

        <button type="submit">Salvar</button>

    </form>

    <a href="/index.php">Voltar a lista</a>

</body>
</html>

