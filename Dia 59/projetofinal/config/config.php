<?php


$host = 'localhost';
$dbname = 'projeto_php';
$username = 'root';
$password = '1234';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);  // Para MySQL
    // $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);  // Para PostgreSQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Para mostrar erros
} catch (PDOException $e) {
    echo 'Erro de conexão: ' . $e->getMessage();
    exit;
}
