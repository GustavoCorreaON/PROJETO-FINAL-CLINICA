<?php

require_once '../PROJETO-FINAL-CLINICA/ProjetoClinica/config/conexao.php';

class Salvar {
    private $conn;
    private $table_name = "adm";

    public $nomecompleto;
    public $cpf;
    public $email;
    public $datanascimento;
    public $emailclinica;
    public $confirmeemailclinica;
    public $senhaclinica;
    public $confirmesenhaclinica;

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save(){
        $query = "INSERT INTO" . $this->table_name . " (nomecompleto, cpf, email, datanascimento, emailclinica, confirmeemailclinica, senhaclinica, confirmesenhaclinica) 
        VALUES (:nomecompleto, :cpf, :email, :datanascimento, :emailclinica, :confirmeemailclinica, :senhaclinica, :confirmesenhaclinica)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nomecompleto', $this->nomecompleto);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':datanascimento', $this->datanascimento);
        $stmt->bindParam(':emailclinica', $this->emailclinica);
        $stmt->bindParam(':confirmeemailclinica', $this->confirmeemailclinica);
        $stmt->bindParam(':senhaclinica', $this->senhaclinica);
        $stmt->bindParam(':confirmesenhaclinica', $this->confirmesenhaclinica);

        if($stmt->execute()){
            return true;
        }
        return false;
    }

    public function getAll(){
        $query = "SELECT * FROM ". $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->FetchAll(PDO::FETCH_ASSOC);
    }
}