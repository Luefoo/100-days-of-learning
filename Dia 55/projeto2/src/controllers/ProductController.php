<?php
// Inclui o arquivo de modelo para poder usar a classe Product.
// Isso permite o uso de métodos como getAll, getById, create, update, e delete para manipular dados do banco de dados.
require_once __DIR__ . "/../models/Product.php";

// Declaração da classe ProductController. Esta classe é responsável por controlar as operações relacionadas aos produtos.
class ProductController {
    // Método que retorna a lista de todos os produtos.
    public function listProducts() {
        // Chama o método estático getAll() da classe Product para obter todos os produtos.
        return Product::getAll();
    }

    // Método que retorna os detalhes de um produto específico com base no ID fornecido.
    public function viewProduct($id) {
        // Chama o método estático getById() da classe Product para obter os detalhes do produto pelo ID.
        return Product::getById($id);
    }
    // Método que cria um novo produto com base nos dados fornecidos.
public function createProduct($data) {
    // Chama o método estático create() da classe Product para criar um novo produto no banco de dados.
    Product::create($data);
}

// Método que edita um produto existente com base no ID e nos dados fornecidos.
public function editProduct($id, $data) {
    // Chama o método estático update() da classe Product para atualizar o produto no banco de dados.
    Product::update($id, $data);
}

// Método que exclui um produto com base no ID fornecido.
public function deleteProduct($id) {
    // Chama o método estático delete() da classe Product para excluir o produto do banco de dados.
    Product::delete($id);
}

}

