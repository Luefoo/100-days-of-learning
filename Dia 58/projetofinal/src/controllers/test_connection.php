<?php
require 'Connection.php';

try {
    // Testando a conexão
    $db = Connection::getConnection();
    echo "Conexão com o banco de dados estabelecida com sucesso!";
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>
