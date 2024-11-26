<?php
class Connection {
    private static $pdo;

    // Método estático para obter a conexão
    public static function getConnection() {
        if (!self::$pdo) {
            try {
                // Definindo os parâmetros de conexão diretamente
                $host = 'localhost'; // Alterar se necessário
                $dbname = 'nome_do_banco_de_dados'; // Nome do banco de dados
                $username = 'seu_usuario'; // Usuário do banco de dados
                $password = 'sua_senha'; // Senha do banco de dados

                // Configurando o DSN
                $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

                // Criando a instância PDO
                self::$pdo = new PDO($dsn, $username, $password);

                // Configurando o modo de erro para exceção
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                // Exibindo erro diretamente para simplificar testes (não recomendado em produção)
                die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
