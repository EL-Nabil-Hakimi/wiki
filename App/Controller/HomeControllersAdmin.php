<?php

namespace App\Controller;

use App\Models\Categories;
use App\Models\Tags;
use App\Models\Wiki;

session_start();
class HomeControllersAdmin{

    public function login_page(){
        session_destroy();
        require_once __DIR__."/../../View/Login/login.php";
    }
    public function registre_page(){
        require_once __DIR__."/../../View/Login/register.php";
    }
    public function Index(){

        $id_user = (new Check())->isActif();

        require_once __DIR__."/../../View/User/index.php";
    }
// end authontification ______________________________________________________________________________

    public function dashboard(){
        $id_user = (new Check())->isActif();
        require_once __DIR__."/../../View/Admin/dashboard.php";
    }
    public function wikies_page(){
        $id_user = (new Check())->isActif();

        $getwikies = new Wiki();
        $articles = $getwikies->getAllWiki();

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $delete = new Wiki();
            $result = $delete->DeleteddWiki($id);
            if($result){
            header("location:?route=wikies_page");
           }
        }
        require_once __DIR__."/../../View/Admin/wikies.php";
    }
    public function wikies_deleted_page(){
        $id_user = (new Check())->isActif();

        $getwikies = new Wiki();
        $articles = $getwikies->getAllWikiDeleted();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $delete = new Wiki();
            $result = $delete->RestoreWiki($id);
            if($result){
            header("location:?route=wikies_deleted_page");
           }
        }
        require_once __DIR__."/../../View/Admin/wikies_deleted.php";
    }

    public function categories_page(){
        $id_user = (new Check())->isActif();

        $getCaterories = new Categories();
        $results = $getCaterories->getCategory();

        require_once __DIR__."/../../View/Admin/categories.php";
    }
    public function page_add_category() {
        $id_user = (new Check())->isActif();
    
        require_once __DIR__."/../../View/Admin/page_add_category.php";
    }
    public function delete_category($id) {
        $id_user = (new Check())->isActif();
        
        $delete = new Categories();
        $delete->DeleteCategory($id);

        header('location:?route=categories_page&msg=success');

    }
    public function add_category($nom) {
        $id_user = (new Check())->isActif();
        $getCategory = new Categories();
        $result = $getCategory->AddCategory($nom);
    
        if ($result) {
            header('location:?route=page_add_category&msg=success');
        } else {
            header('location:?route=page_add_category&msg=error');
        }
        exit();
    }

    public function page_modify_category($id){
        $id_user = (new Check())->isActif();
        $getCategories = new Categories();
        $results = $getCategories->getCategoryID($id);
        require_once __DIR__ ."/../../View/Admin/modify_cotegory.php";
    }
    public function modify_category($id , $name){
        $getCategories = new Categories();
        $getCategories->UpdateCategory($id ,$name);

        header('location:?route=categories_page&msg=success');
    }

    public function page_tage(){
        $id_user = (new Check())->isActif();

        $getTags = new Tags();
        $results = $getTags->getAllTags();        
        require_once __DIR__ ."/../../View/Admin/tags.php";
    }

    public function delete_tags($id){
        $id_user = (new Check())->isActif();

           $delete = new Tags();
           $delete->DeleteTags($id);
           header('location:?route=page_tage');

    }
    public function modify_page_tage($id){
        $id_user = (new Check())->isActif();


           $tag = new Tags();
           $results = $tag->getddTagsID($id);

           require_once __DIR__ ."/../../View/Admin/modify_tags.php";

    }
    public function modify_tage($id , $name){
        $id_user = (new Check())->isActif();


           $tag = new Tags();
           $tag->UpdateddTags($id , $name);

            header('location:?route=page_tage');

    }

    public function add_page_tags(){
        $id_user = (new Check())->isActif();

        
        require_once __DIR__ ."/../../View/Admin/page_add_tags.php";

    }
    public function add_tage($name){
        $id_user = (new Check())->isActif();

        $add = new Tags();
        $add->AddTags($name);

        header('location:?route=page_tage');

    }
       
    
}


?>