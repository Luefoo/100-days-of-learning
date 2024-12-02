<?php
// src/views/create.php

require_once __DIR__ . '/../src/controllers/ProductController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new ProductController();
    $controller->createProduct($_POST);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Produto</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilo da Página Create */
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px; /* Aumentado para 800px */
            margin: 80px auto; /* Centraliza o container */
            text-align: center; /* Centraliza os textos dentro do container */
        }

        .container h1 {
            margin-bottom: 20px;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Criar Novo Produto</h1>
        <form action="create.php" method="post">
            <div class="form-container">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <textarea id="description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Preço:</label>
                    <input type="number" id="price" name="price" step="0.01" required>
                </div>
                <button type="submit">Criar</button>
            </div>
        </form>
        <a href="index.php">Voltar à lista</a>
    </div>
</body>
</html>
