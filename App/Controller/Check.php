<?php
namespace App\Controller;
class Check{
    public function isActif(){
        if(isset($_SESSION['id_user'])){
            $id_user = $_SESSION['id_user'];
            return $id_user;
        }
            else header('location:?route=login');
    }
}

?>