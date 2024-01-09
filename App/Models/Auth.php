<?php 

namespace App\Models;
use App\Models\Database;
use PDO;

class Auth{
    public $db;

    public function __construct() {

        $connexion = new Database();
        $this->db = $connexion->getConnexion();
    }

    public function SignUp($name, $email, $password) {
        
        $stmt = $this->db->prepare('SELECT * FROM user WHERE email = :email');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if(!$row){

                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                        $role = 2;    
                        $stmt = $this->db->prepare("INSERT INTO `user`(`name`, `email`, `password`, `role`)
                                    VALUES (:name, :email, :password, :role)");
                        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                        $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
                        $stmt->bindParam(':role', $role, PDO::PARAM_INT);
                        $stmt->execute();
                        return 1 ;
                    }
                    else{
                        return 0;
                    }
        }
    
    public function SignIn($email, $password) {
        session_start();

        $stmt = $this->db->prepare('SELECT * FROM user WHERE email = :email');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($row && password_verify($password, $row['password'])) {
            $_SESSION['id_user'] = $row['id'];
            $role = $row["role"];
            if($role==1){
                return 1;
            }
            else{
                return 2;
            }
        } else {
            return false;
        }
    }
    


}

?>