<?php

namespace App\Models;

use App\Models\Database;
use PDO;
use PDOException;

class Wiki {
    public $db;

    public function __construct() {
        $connexion = new Database();
        $this->db = $connexion->getConnexion();
    }

    public function getAllWiki(){

        try{
            $stmt = $this->db->prepare(" SELECT articles.* , user.name name FROM `articles` 
                    INNER JOIN user ON user.id = articles.userID 
                    WHERE actif IS NULL ORDER BY id DESC");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        catch (PDOException){
            return false;
        } 
    }
    public function getAllWikiDeleted(){

        try{
            $stmt = $this->db->prepare("SELECT * FROM `articles` WHERE actif = 1 ORDER BY id DESC");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        catch (PDOException){
            return false;
        } 
    }


    public function getddWikiID($id){
        try{
            $stmt = $this->db->prepare("SELECT articles.* , user.* , cateroies.name ctgrname FROM `articles`
            INNER JOIN user ON user.id = articles.userID
            INNER JOIN cateroies ON cateroies.id = articles.categoryID
            WHERE articles.id = :id ");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result; 
        }
            catch (PDOException){
                return 0;
            }
    }
    public function AddWiki($title, $description, $user_id, $ctgr_id, $selectedTags, $imagePath)
{
    try {
        $stmt = $this->db->prepare("INSERT INTO `articles`(`title`, `description`, `userID`, `categoryID` , `image`)
                     VALUES (:title, :description, :user_id, :ctgr_id , :image)");

        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $stmt->bindParam(':ctgr_id', $ctgr_id, PDO::PARAM_STR);
        $stmt->bindParam(':image', $imagePath, PDO::PARAM_STR);
        $result = $stmt->execute();

        if ($result) {
            $addtage = $this->db->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 1;');
            $addtage->execute();
            $resultTags = $addtage->fetchAll(PDO::FETCH_ASSOC);

            if ($resultTags) {
                $id_wiki = $resultTags[0]['id'];
                foreach ($selectedTags as $tags) {
                    var_dump($tags);
                    $stmt = $this->db->prepare("INSERT INTO `tages_user`(`wikiID`, `tagsID`) VALUES (:id_wiki, :id_user)");
                    $stmt->bindParam(':id_wiki', $id_wiki);
                    $stmt->bindParam(':id_user', $tags);
                    $stmt->execute(); 
                }
            }
        }           

            return true;   
            
        }
            catch (PDOException){
                return 0;
            }
    }

    public function DeleteddWiki($id) {
        try {
            $stmt = $this->db->prepare("UPDATE `articles`
                  SET `actif`=:deleted WHERE id = :id");
            $deleted = 1;
            $stmt->bindParam(':deleted', $deleted, PDO::PARAM_INT);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true; 
        } catch (PDOException $e) {
            return false;
        }
    }
    
    public function RestoreWiki($id) {
        try {
            $stmt = $this->db->prepare("UPDATE `articles`
                  SET `actif`=:deleted WHERE id = :id");
            $deleted = NULL;
            $stmt->bindParam(':deleted', $deleted, PDO::PARAM_INT);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true; 
        } catch (PDOException $e) {
            return false;
        }
    }
    

    public function UpdateddWiki($id , $title , $description , $ctgr_id) {
        try{
            $stmt = $this->db->prepare("UPDATE `articles` 
                            SET `title`= :title,`description`= :description,`categoryID`= :ctgr_id WHERE id = :id");
            $stmt->bindParam(':id' , $id, PDO::PARAM_INT);
            $stmt->bindParam(':title', $title, PDO::PARAM_STR);
            $stmt->bindParam(':description', $description, PDO::PARAM_STR);
            $stmt->bindParam(':ctgr_id', $ctgr_id, PDO::PARAM_STR);
            $stmt->execute();
        return true;
    }
        catch (PDOException){
            return false;
        }
    } 


    public function mywikies($id){
        try{
            $stmt = $this->db->prepare(" SELECT articles.* , user.name name FROM `articles` 
                    INNER JOIN user ON user.id = articles.userID 
                    WHERE actif IS NULL AND user.id = :id ORDER BY id DESC ");
            $stmt->bindParam('id' , $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        catch (PDOException){
            return false;
        } 
    }
     

    
    public function Search($title, $category, $tags){

        $sql = "SELECT articles.*, user.*, cateroies.name ctgr FROM articles
                INNER JOIN user ON user.id = articles.userID 
                INNER JOIN cateroies ON cateroies.id = articles.categoryID";
    
        $conditions = array();
    
        if (!empty($title)) {
            $conditions[] = "articles.title LIKE :title";
            $searchTitle = '%' . $title . '%';
        }
    
        if (!empty($category)) {
            $conditions[] = "cateroies.name LIKE :category";
            $searchCategory = '%' . $category . '%';
        }
    
        if (!empty($tags)) {
            $sql .= " INNER JOIN tages_user ON articles.id = tages_user.wikiID 
                      INNER JOIN tages ON tages_user.tagsID = tages.id";
            $conditions[] = "tages.name LIKE :tags";
            $searchTags = '%' . $tags . '%';
        }
    
        if (!empty($conditions)) {
            $sql .= " WHERE " . implode(" AND ", $conditions); }
    
        $stmt = $this->db->prepare($sql);
    
        if (!empty($title)) {
            $stmt->bindParam(':title', $searchTitle, PDO::PARAM_STR);
        }
    
        if (!empty($category)) {
            $stmt->bindParam(':category', $searchCategory, PDO::PARAM_STR);
        }
    
        if (!empty($tags)) {
            $stmt->bindParam(':tags', $searchTags, PDO::PARAM_STR);
        }
        
        
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $results;
    }
    
    
}