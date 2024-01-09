<?php

namespace App\Models;

use App\Models\Database;
use PDO;
use PDOException;

class Tags {
    public $db;

    public function __construct() {
        $connexion = new Database();
        $this->db = $connexion->getConnexion();
    }

    public function getAllTags(){

        try{
            $stmt = $this->db->prepare("SELECT * FROM `tages`");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        catch (PDOException){
            return false;
        } 
    }
    public function getddTagsID($id){
        try{
            $stmt = $this->db->prepare("SELECT * FROM tages WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result; 
        }
            catch (PDOException){
                return 0;
            }
    }

    public function AddTags($name) {    
        try{    
            $stmt = $this->db->prepare("INSERT INTO `tages`(`name`) VALUES (:name)");

            $stmt->bindParam(':name', $name , PDO::PARAM_STR);
            $stmt->execute();
            return true;   
        }
            catch (PDOException){
                return 0;
            }
    }

    public function DeleteTags($id) {
        try{
            $stmt = $this->db->prepare("DELETE FROM tages WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true; 
        }
            catch (PDOException){
                return false;
            }
        
    }
    public function UpdateddTags($id, $name) {
        try{
            $stmt = $this->db->prepare("UPDATE `tages` 
                    SET `name`=:name  WHERE id = :id");

            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->execute();
        return true;
    }
        catch (PDOException){
            return false;
        }
    } 

}