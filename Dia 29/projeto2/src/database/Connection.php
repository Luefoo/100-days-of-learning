<?php

// Declaração da classe Connection. Esta classe é usada para gerenciar a conexão com o banco de dados.
class Connection
{
    // Declaração de uma propriedade estática privada para armazenar a instância única da conexão PDO.
    private static $instance = null;

    // Método público e estático que retorna a conexão com o banco de dados.
    public static function getConnection()
    {
        // Verifica se a instância da conexão ainda não foi criada.
        if (self::$instance === null) {
            // Carrega as configurações de banco de dados a partir de um arquivo de configuração.
            // O arquivo de configuração esperado está localizado em "../../config/config.php".
            $config = require __DIR__ . '/../config/config.php';

            // Cria uma nova instância de PDO para conexão com o banco de dados.
            // Usa as configurações carregadas para definir o host, nome do banco de dados, usuário e senha.
            // Também define o modo de erro para lançar exceções em caso de falha na execução de uma consulta SQL.
            self::$instance = new PDO(
                "mysql:host={$config['host']};dbname={$config['dbname']}",
                $config['user'],
                $config['password'],
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] // Define o modo de erro para exceções.
            );
        }

        // Retorna a instância única da conexão PDO.
        return self::$instance;
    }
}
