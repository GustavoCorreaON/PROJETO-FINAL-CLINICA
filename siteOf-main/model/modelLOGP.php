<?php

require_once '../config/conexao.php';

class LogP{
    private $conn;
    private $table_name = "pacientes";
    
    public $nomecompleto;
    public $cpf;
    public $senha;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function logar() {
        $query = "INSERT INTO " . $this->table_name . " (nomecompleto, cpf, senha) 
        VALUES (:nomecompleto, :cpf, :senha)";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(':nomecompleto', $this->nomecompleto);
    $stmt->bindParam(':cpf', $this->cpf);
    $stmt->bindParam(':senha', $this->senha);

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