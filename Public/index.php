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
// Partie User Not Login_______________________________________________________________________________

    case 'home': 
        $controller = new HomeControllersUser();
        $controller->home();
        break;
    case 'category_page_home': 
        $controller = new HomeControllersUser();
        $controller->category_page_home();
        break;
    case 'search_page_home': 
        
        isset($GET['title']);
        $title = $_GET['title'];
        $category = $_GET['category'];
        $tags = $_GET['tags'];
        $controller = new HomeControllersUser();
        $controller->search_page_home($title , $category , $tags);
        break;
    case 'info_page_home': 
        
        isset($GET['id']);
        $id = $_GET['id'];
        $controller = new HomeControllersUser();
        $controller->GetWiki($id);
        break;
            
    case 'contact_page_home': 
        $controller = new HomeControllersUser();
        $controller->ContactWiki();
        break;
                    
// Partie User Not Login_______________________________________________________________________________
                   
        case 'index': 
            $controller = new HomeControllersUser();
            $controller->index();
            break;
        case 'category_page_user': 
            $controller = new HomeControllersUser();
            $controller->category_page_user();
            break;
        case 'search_page_user':
            
            isset($GET['title']);
            $title = $_GET['title'];
            $category = $_GET['category'];
            $tags = $_GET['tags'];
            $controller = new HomeControllersUser();
            $controller->search_page_user($title , $category , $tags);
            break;
        case 'info_page_user': 
            
            isset($GET['id']);
            $id = $_GET['id'];
            $controller = new HomeControllersUser();
            $controller->GetWiki_user($id);
            break;
                
        case 'contact_page_user': 
            $controller = new HomeControllersUser();
            $controller->contactWiki_user();
            break;
        case 'add_page_user': 
            $controller = new HomeControllersUser();
            $controller->add_page_user();
            break;
        case 'add_wiki': 
            if(isset($_POST['submit'])){
                $title = $_POST["title"];
                $description = $_POST["description"];
                $ctgr_id = $_POST["category"];
                $selectedTags = isset($_POST["selectedTags"]) ? $_POST["selectedTags"] : array();
                $user_id = 2;
                if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
                    $imagePath = "assets/images/" . basename($_FILES["image"]["name"]);
                    move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);
                } else {
                    $imagePath = null;
                }
            };
            $controller = new HomeControllersUser();
            $controller->add_wiki($title, $description, $user_id, $ctgr_id, $selectedTags, $imagePath);
            break;

    default :       
       echo 'Page Not Found 404';
}


?>
