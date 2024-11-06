
<?php

require_once '../config/conexao.php';

class Admistrador {
    private $conn;
    private $table_name = "admistradores";
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

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}