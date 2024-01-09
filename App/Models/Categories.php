<?php

namespace App\Models;

use App\Models\Database;
use PDO;
use PDOException;

class Categories {
    public $db;

    public function __construct() {
        $connexion = new Database();
        $this->db = $connexion->getConnexion();
    }

    public function getCategory(){

        try{
            $stmt = $this->db->prepare("SELECT * FROM `cateroies`");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        catch (PDOException){
            return false;
        } 
    }
    public function getCategoryID($id){
        try{
            $stmt = $this->db->prepare("SELECT * FROM `cateroies` WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result; 
        }
            catch (PDOException){
                return 0;
            }
    }

    public function AddCategory($nom) {    
        try {    
            $stmt = $this->db->prepare("INSERT INTO `cateroies` (`name`) VALUES (:name)");
            $stmt->bindParam(':name', $nom, PDO::PARAM_STR);
            $stmt->execute();
            return true;   
        } catch (PDOException $e) {
            error_log("Error adding category: " . $e->getMessage());
            return false;
        }
    }   
    

    public function DeleteCategory($id) {
        try{
            $stmt = $this->db->prepare("DELETE FROM cateroies WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true; 
        }
            catch (PDOException){
                return false;
            }
        
    }
    public function UpdateCategory($id , $name) {
        try{
            $stmt = $this->db->prepare("UPDATE cateroies SET name = :name WHERE id = :id");
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            
        return true;
    }
        catch (PDOException){
            return false;
        }
    } 

}