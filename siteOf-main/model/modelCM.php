<?php

require_once '../config/conexao.php';

class Medico {
    private $conn;
    private $table_name = "medicos";

    public $nome_completo;
    public $crm;
    public $especializacao;
    public $cpf;
    public $email;
    public $senha;
    public $data_nascimento;
    public $email_clinica;
    public $senha_clinica;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function cadastrar() {
        $query = "INSERT INTO " . $this->table_name . " (nome_completo, crm, especializacao, cpf, email, senha, data_nascimento, email_clinica, senha_clinica) 
                  VALUES (:nome_completo, :crm, :especializacao, :cpf, :email, :senha, :data_nascimento, :email_clinica, :senha_clinica)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome_completo', $this->nome_completo);
        $stmt->bindParam(':crm', $this->crm);
        $stmt->bindParam(':especializacao', $this->especializacao);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
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