<?php

require_once '../config/conexao.php';

class Admistrador {
    private $conn;
    private $table_name = "admistradores";

    public $id; // Adicionei o campo ID para operações de update e delete.
    public $nome_completo;
    public $cpf;
    public $email;
    public $data_nascimento;
    public $email_clinica;
    public $senha_clinica;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Método para cadastrar um administrador
    public function cadastrar() {
        $query = "INSERT INTO " . $this->table_name . " (nome_completo, cpf, email, data_nascimento, email_clinica, senha_clinica) 
                  VALUES (:nome_completo, :cpf, :email, :data_nascimento, :email_clinica, :senha_clinica)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome_completo', $this->nome_completo);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':email_clinica', $this->email_clinica);
        $stmt->bindParam(':senha_clinica', $this->senha_clinica);

        return $stmt->execute();
    }

    // Método para listar todos os administradores
    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para buscar um administrador pelo ID
    public function getById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id_admistrador = :id_admistrador";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_admistrador', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para atualizar um administrador
    public function update() {
        $query = "UPDATE " . $this->table_name . " 
                  SET nome_completo = :nome_completo, cpf = :cpf, email = :email, 
                      data_nascimento = :data_nascimento, email_clinica = :email_clinica, 
                      senha_clinica = :senha_clinica 
                  WHERE id_admistrador = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome_completo', $this->nome_completo);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':email_clinica', $this->email_clinica);
        $stmt->bindParam(':senha_clinica', $this->senha_clinica);
        $stmt->bindParam(':id', $this->id);

        return $stmt->execute();
    }

    // Método para excluir um administrador pelo ID
    public function deleteById() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_admistrador = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);

        return $stmt->execute();
    }
}
