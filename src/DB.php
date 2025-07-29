<?php
namespace App;
use PDO;
use PDOException;

class DB {
    private $conn;

    public function __construct() {
        try {
        $this->conn = new PDO("sqlite:db.sqlite"); // Use SQLite for simplicity
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "Ühendatud andmebaasiga!";
        } catch(PDOException $e) {
        echo "Ühendus puudub: " . $e->getMessage();
        }
    }
    public function all($table, $class) {
           // Fetch all posts from the database
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }

}