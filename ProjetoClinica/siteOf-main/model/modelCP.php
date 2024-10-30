<?php

require_once '../PROJETO-FINAL-CLINICA/ProjetoClinica/siteOf-main/config/conexao.php';

class paciente {
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

    public function cadastrar() {
        $query = "INSERT INTO " . $this->table_name . " (nome_responsavel, cpf_responsavel, contato_responsavel, email_responsavel, senha_responsavel, data_nascimento_responsavel, 
            nome_completo_crianca, cpf_crianca, data_nascimento_crianca, sexo_crianca, numero_carteirinha, plano_crianca) 
            VALUES (:nome_responsavel, :cpf_responsavel, :contato_responsavel, :email_responsavel, :senha_responsavel, :data_nascimento_responsavel, 
            :nome_completo_crianca, :cpf_crianca, :data_nascimento_crianca, :sexo_crianca, :numero_carteirinha, :plano_crianca)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome_responsavel', $this->nome_responsavel);
        $stmt->bindParam(':cpf_responsavel', $this->cpf_responsavel);
        $stmt->bindParam(':contato_responsavel', $this->contato_responsavel);
        $stmt->bindParam(':email_responsavel', $this->email_responsavel);
        $stmt->bindParam(':senha_responsavel', $this->senha_responsavel);
        $stmt->bindParam(':data_nascimento_responsavel', $this->data_nascimento_responsavel);
        $stmt->bindParam(':nome_completo_crianca', $this->nome_completo_crianca);
        $stmt->bindParam(':cpf_crianca', $this->cpf_crianca);
        $stmt->bindParam(':data_nascimento_crianca', $this->data_nascimento_crianca);
        $stmt->bindParam(':sexo_crianca', $this->sexo_crianca);
        $stmt->bindParam(':numero_carteirinha', $this->numero_carteirinha);
        $stmt->bindParam(':plano_crianca', $this->plano_crianca);
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
