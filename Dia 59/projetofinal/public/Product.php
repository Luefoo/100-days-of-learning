
<?php
// src/models/Product.php

require_once __DIR__ . '/../config/database.php';

class Product
{
    public static function getAll()
    {
        $db = Database::getConnection();
        $query = "SELECT * FROM products";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id)
    {
        $db = Database::getConnection();
        $query = "SELECT * FROM products WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data)
    {
        $db = Database::getConnection();
        $query = "INSERT INTO products (name, description, price) VALUES (:name, :description, :price)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->execute();
    }

    public static function update($id, $data)
    {
        $db = Database::getConnection();
        $query = "UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':price', $data['price']);
        return $stmt->execute(); // Retorna true ou false
    }

    public static function delete($id)
    {
        $db = Database::getConnection();
        $query = "DELETE FROM products WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}
