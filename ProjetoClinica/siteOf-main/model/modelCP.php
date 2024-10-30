<?php

require_once '../config/database.php';

class Book {
    private $conn;
    private $table_name = "pacientes";

    public $title;
    public $author;
    public $publication_year;
    public $genre;
    public $price;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (title, author, publication_year, genre, price) VALUES (:title, :author, :publication_year, :genre, :price)";
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
