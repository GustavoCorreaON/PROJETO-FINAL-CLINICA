<?php

class Paciente {
    private $conn;
    private $table_name = "pacientes";

    public $id;
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
    public $grau_parentesco;
    public $qual_plano;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function cadastrar() {
        $query = "INSERT INTO " . $this->table_name . " 
            (nome_responsavel, cpf_responsavel, contato_responsavel, email_responsavel, senha_responsavel, data_nascimento_responsavel, 
            nome_completo_crianca, cpf_crianca, data_nascimento_crianca, sexo_crianca, numero_carteirinha, plano_crianca, grau_parentesco, qual_plano) 
            VALUES 
            (:nome_responsavel, :cpf_responsavel, :contato_responsavel, :email_responsavel, :senha_responsavel, :data_nascimento_responsavel, 
            :nome_completo_crianca, :cpf_crianca, :data_nascimento_crianca, :sexo_crianca, :numero_carteirinha, :plano_crianca, :grau_parentesco, :qual_plano)";
        
        $stmt = $this->conn->prepare($query);

        // Bind parameters
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
        $stmt->bindParam(':grau_parentesco', $this->grau_parentesco);
        $stmt->bindParam(':qual_plano', $this->qual_plano);

        return $stmt->execute();
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " 
                  SET nome_responsavel = :nome_responsavel, cpf_responsavel = :cpf_responsavel, contato_responsavel = :contato_responsavel, 
                      email_responsavel = :email_responsavel, senha_responsavel = :senha_responsavel, data_nascimento_responsavel = :data_nascimento_responsavel, 
                      nome_completo_crianca = :nome_completo_crianca, cpf_crianca = :cpf_crianca, data_nascimento_crianca = :data_nascimento_crianca, 
                      sexo_crianca = :sexo_crianca, numero_carteirinha = :numero_carteirinha, plano_crianca = :plano_crianca, 
                      grau_parentesco = :grau_parentesco, qual_plano = :qual_plano 
                  WHERE id = :id";
        
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
        $stmt->bindParam(':grau_parentesco', $this->grau_parentesco);
        $stmt->bindParam(':qual_plano', $this->qual_plano);
        $stmt->bindParam(':id', $this->id);

        return $stmt->execute();
    }

    public function deleteById(): bool {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);

        return $stmt->execute();
    }
}