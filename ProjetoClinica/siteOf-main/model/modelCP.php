<?php

require_once '../PROJETO-FINAL-CLINICA/ProjetoClinica/config/conexao.php';

class pacientes {
    private $conn;
    private $table_name = "pacientes";

    public $nome_responsavel;
    public $cpf_responsavel;
    public $contato_responsavel;
    public $email_responsavel;
    public $senha_responsavel;
    public $data_nascimento_responsavel;
    public $nome_completo_crianca;
    public $cpf_crianca;
    public $data_nascimento_crianca;
    public $sexo_crianca;
    public $numero_carteirinha;
    public $plano_crianca;
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (nome_responsavel, cpf_responsavel, contato_responsavel, email_responsavel, senha_responsavel, data_nascimento_responsavel, 
            nome_completo_crianca, cpf_crianca, data_nascimento_crianca, sexo_crianca, numero_carteirinha, plano_crianca) 
            VALUES (:nome_responsavel, :cpf_responsavel, :contato_responsavel, :email_responsavel, :senha_responsavel, :data_nascimento_responsavel, 
            :nome_completo_crianca, :cpf_crianca, :data_nascimento_crianca, :sexo_crianca, :numero_carteirinha, :plano_crianca)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':publication_year', $this->publication_year);
        $stmt->bindParam(':genre', $this->genre);
        $stmt->bindParam(':price', $this->price);

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
