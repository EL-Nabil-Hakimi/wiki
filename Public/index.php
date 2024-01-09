<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Controller\AuthController;
use App\Controller\HomeControllersAdmin;
use App\Controller\HomeControllersUser;


$route = isset($_GET['route']) ? $_GET['route'] : 'login' ;

switch ($route){

// Authontification ___________________________________________________________________________________
        case 'login' :
            $controller = new HomeControllersAdmin();
            $controller->login_page();
            break;
        case 'register' :
            $controller = new HomeControllersAdmin();
            $controller->registre_page();
            break;
        case 'SignIn':
                isset($_POST['submit']);
                extract($_POST);
                $controller = new AuthController();
                $controller->SignIn($email,$password);
            break;
        case 'SignUp':
                isset($_POST['submit']);
                extract($_POST);
                if($password == $c_password){
                    $controller = new AuthController();
                    $controller->SignUp($name,$email,$password);
                }
                else{
                    header('location:?route=register&msg');
                }
            break;
// end Authontification ___________________________________________________________________________________

        case 'dashboard' : 
            $controller = new HomeControllersAdmin();
            $controller->dashboard();
            break;

        case 'wikies_page' : 
            $controller = new HomeControllersAdmin();
            $controller->wikies_page();
            break;

        case 'wikies_deleted_page' : 
            $controller = new HomeControllersAdmin();
            $controller->wikies_deleted_page();
            break;

        case 'categories_page': 
                $controller = new HomeControllersAdmin();
                $controller->categories_page();
                break;

        case 'page_add_category':

            $controller = new HomeControllersAdmin();
            $controller->page_add_category();
            break;

        case 'add_category':
                isset($_POST);
                extract($_POST);
                $controller = new HomeControllersAdmin();
                $controller->add_category($name);
            break;

        case 'delete_category':
                isset($_GET);
                $id = $_GET['id']; 
                $controller = new HomeControllersAdmin();
                $controller->delete_category($id);
            break;

        case 'page_modify_category':
                isset($_GET);
                $id = $_GET['id']; 
                $controller = new HomeControllersAdmin();
                $controller->page_modify_category($id);
            break;

        case 'modify_category':
                isset($_POST['submit']);
                extract($_POST);
                $controller = new HomeControllersAdmin();
                $controller->modify_category($id , $name);
            break;

        case 'page_tage':

            if(isset($_GET['id'])){

                $id = $_GET['id'];
                $controller = new HomeControllersAdmin();
                $controller->delete_tags($id);
            }
            $controller = new HomeControllersAdmin();
            $controller->page_tage();
            break;
        case "modify_page_tage" :

                isset($_GET['id']);
                $id = $_GET['id'];
                
                $controller = new HomeControllersAdmin();
                $controller->modify_page_tage($id);

            break;
        case "modify_tage" :
                isset($_POST['submit']);
                extract($_POST);
                $controller = new HomeControllersAdmin();
                $controller->modify_tage($id , $name);

            break;
        case "add_page_tage" :                
                $controller = new HomeControllersAdmin();
                $controller->add_page_tags();

            break;
        case "add_tage" :   
            
                isset($_POST['submit']);
                extract($_POST);             
                $controller = new HomeControllersAdmin();
                $controller->add_tage($name);

            break;
// Partie User_______________________________________________________________________________

        case 'index': 
            $controller = new HomeControllersUser();
            $controller->Index();
            break;
        case 'category_page': 
            $controller = new HomeControllersUser();
            $controller->category_page();
            break;
        case 'search_page': 

            isset($GET['title']);
            $title = $_GET['title'];
            $category = $_GET['category'];
            $tags = $_GET['tags'];
            $controller = new HomeControllersUser();
            $controller->search_page($title , $category , $tags);
            break;


    default :       
       echo 'Page Not Found 404';
}


?>
