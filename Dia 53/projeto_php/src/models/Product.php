<?php
// Inclui o arquivo de conexão com o banco de dados para abrir a base de dados.
require_once __DIR__ . '/../../database/Connection.php';

// Declaração da classe Product. Esta classe é usada para operações relacionadas aos produtos no banco de dados.
class Product
{
    /**
     * Método estático que retorna todos os registros da tabela 'products'.
     *
     * @return array
     */
    public static function getAll()
    {
        // Obtém a conexão com o banco de dados usando a classe Connection.
        $db = Connection::getConnection();

        // Executa uma consulta SQL para selecionar todos os registros da tabela 'products'.
        $stmt = $db->query("SELECT * FROM products");

        // Retorna todos os resultados da consulta como um array associativo.
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // Método estático que retorna um produto específico com base no ID fornecido.
public static function getProductById($id)
{
    // Obtém uma conexão com o banco de dados.
    $db = static::getConnection();

    // Prepara uma declaração SQL para selecionar um produto onde o 'id' é igual ao valor fornecido.
    $stmt = $db->prepare('SELECT * FROM products WHERE id = :id');

    // Executa a declaração preparada com o parâmetro 'id' fornecido.
    $stmt->execute(['id' => $id]);

    // Retorna o primeiro resultado encontrado como um array associativo.
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Método estático que cria um novo produto com base nos dados fornecidos.
public static function create($data)
{
    // Obtém a conexão com o banco de dados.
    $db = Connection::getConnection();

    // Prepara uma declaração SQL para inserir um novo registro na tabela 'products'.
    $stmt = $db->prepare('INSERT INTO products (name, description, price) VALUES (:name, :description, :price)');

    // Executa a declaração preparada com os dados fornecidos.
    $stmt->execute([
        'name' => $data['name'],
        'description' => $data['description'],
        'price' => $data['price']
    ]);
}

// Método estático que atualiza um produto existente com base no ID e nos dados fornecidos.
public static function update($id, $data)
{
    // Obtém a conexão com o banco de dados.
    $db = Connection::getConnection();

    // Prepara uma declaração SQL para atualizar um registro existente na tabela 'products'.
    $stmt = $db->prepare('UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id');

    // Executa a declaração preparada com os dados fornecidos.
    $stmt->execute([
        'id' => $id,
        'name' => $data['name'],
        'description' => $data['description'],
        'price' => $data['price']
    ]);
}

// Método estático que exclui um produto com base no ID fornecido.
// Método estático que exclui um produto com base no ID fornecido.
public static function delete($id) {
    // Obtém a conexão com o banco de dados.
    $db = Connection::getConnection();
    // Prepara uma declaração SQL para excluir um registro da tabela 'products' onde o 'id' é igual ao valor fornecido.
    $stmt = $db->prepare('DELETE FROM products WHERE id = :id');
    // Executa a declaração preparada com o parâmetro 'id' fornecido.
    $stmt->execute(['id' => $id]);
}


}
