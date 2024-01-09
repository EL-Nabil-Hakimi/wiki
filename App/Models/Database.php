<?php

namespace App\Models;
use PDO;
use PDOException;

class Database {
    private $db;
    private $host = 'localhost:3307';
    private $dbname = 'wikidb';
    private $username = 'root';
    private $password = '';

    public function __construct() {
        try {
            $this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }

    
    public function getConnexion() {
        return $this->db;
    }
}

?>
