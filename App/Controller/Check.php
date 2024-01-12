<?php
namespace App\Controller;
class Check{
    public function isActif(){
        if(isset($_SESSION['id_user']) && isset($_SESSION['role'])){
            $id_user = $_SESSION['id_user'];
            $role = $_SESSION['role'];
            return $id_user;
        }
            else header('location:?route=login');
    }
}

?>