<?php
namespace App\Controller;
use App\Models\Auth;

class AuthController{
        public function SignIn($email , $password){
            $signin = new Auth();
            $result = $signin->SignIn($email , $password);
            if($result == 1){
                header('location:?route=dashboard');
            }
            else if($result==2) {
                 header('location:?route=index');
                }
            else header('location:?route=login');
        } 
        
        public function SignUp($name ,$email , $password){
            $signin = new Auth();
            $result = $signin->SignUp($name , $email , $password);
            if($result == 1){
                header('location:?route=login');
            }
            else header('location:?route=register');
        } 
}


?>