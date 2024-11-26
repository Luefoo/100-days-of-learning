<?php

class UserController {
    private $conn;

    // Método para obter a conexão com o banco de dados
    private function getConnection() {
        $servername = "localhost";
        $username = "root"; // Seu usuário do MySQL
        $password = "aluno123"; // Sua senha (deixe em branco se não tiver senha, ou coloque a senha correta)
        $dbname = "projeto_php"; // Nome do banco de dados

        // Criação da conexão
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        // Verificando se a conexão foi bem-sucedida
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        return $this->conn;
    }

    // Método para verificar se o nome de usuário já existe
    public function userExists($username) {
        $conn = $this->getConnection();

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return true;
        }

        return false;
    }

    // Método para criar um novo usuário
    public function createUser($name, $username, $password) {
        if ($this->userExists($username)) {
            return "O nome de usuário já está em uso.";
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $conn = $this->getConnection();

        $stmt = $conn->prepare("INSERT INTO users (name, username, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $username, $hashedPassword);

        if ($stmt->execute()) {
            return "Usuário registrado com sucesso!";
        } else {
            return "Erro ao registrar o usuário.";
        }
    }

    // Método register() que chama o método createUser()
    public function register($name, $username, $password) {
        if (empty($name) || empty($username) || empty($password)) {
            return false; // Retorna falso se algum valor estiver vazio
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Adicionando hash na senha

        $sql = "INSERT INTO users (name, username, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $name, $username, $hashedPassword); // Passando a senha hasheada para o banco de dados

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Método para verificar a senha durante o login
    public function verifyPassword($username, $password) {
        $conn = $this->getConnection();

        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();

        // Verifica se a senha fornecida corresponde à senha armazenada
        if (password_verify($password, $hashedPassword)) {
            return true;
        }
        return false;
    }
}

?>
