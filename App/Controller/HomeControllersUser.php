<?php

    namespace App\Controller;
    use App\Models\Categories;
    use App\Models\Tags;
    use App\Models\Wiki;

    session_start();
    class HomeControllersUser{
        public function home(){
            $wikies = new Wiki();
            $results = $wikies->getAllWiki();
            require_once __DIR__.'/../../View/home/index.php';
        }
        public function category_page_home(){
            $wikies = new Wiki();
            $results = $wikies->getAllWiki();
            require_once __DIR__.'/../../View/home/category.php';
        }
        public function search_page_home($title ,$category , $tags ){
            $search = new Wiki();
            $results = $search->Search($title , $category , $tags);
            require_once __DIR__.'/../../View/search_page.php';
        }
        public function GetWiki($id){
            $search = new Wiki();
            $results = $search->getddWikiID($id);
            require_once __DIR__.'/../../View/home/info_product.php';
        }
        public function contactWiki(){
            require_once __DIR__.'/../../View/home/contact.php';
        }
   
//end controllers any usrs_______________________________________________________________________________
//end controllers usrs who login_______________________________________________________________________________


        public function index(){
            $id_user = (new Check)->isActif();

            $wikies = new Wiki();
            $results = $wikies->getAllWiki();
            require_once __DIR__.'/../../View/User/index.php';
        }
        public function category_page_user(){
            $id_user = (new Check)->isActif();

            $wikies = new Wiki();
            $results = $wikies->getAllWiki();
            require_once __DIR__.'/../../View/User/category.php';
        }
        public function search_page_user($title ,$category , $tags ){
            $search = new Wiki();
            $results = $search->Search($title , $category , $tags);
            require_once __DIR__.'/../../View/search_page.php';
        } 
        public function contactWiki_user(){
            $id_user = (new Check)->isActif();

            require_once __DIR__.'/../../View/User/contact.php';
        }

        public function GetWiki_user($id){
            $id_user = (new Check)->isActif();

            $search = new Wiki();
            $results = $search->getddWikiID($id);
            require_once __DIR__.'/../../View/User/info_product.php';
        }


        public function mywikies_page_user(){
            $id_user = (new Check)->isActif();

            $wikies = new Wiki();
            $results = $wikies->mywikies($id_user);
            if(isset($_GET['delete'])){
                echo "<script>alert('Is Deleted with Success');</script>";
            }
            if(isset($_GET['modify'])){
                echo "<script>alert('Is Modifed with Success');</script>";
            }
            require_once __DIR__."/../../View/User/mywikies.php";
        }

        public function add_page_user(){
            $id_user = (new Check)->isActif();
            
            $getTags = new Tags();
            $resultstags = $getTags->getAllTags();
            $getctgr = new Categories();
            $resultctgr = $getctgr->getCategory();
            require_once __DIR__.'/../../View/User/add_article.php';
        }
        public function add_wiki($title, $description, $ctgr_id, $selectedTags, $imagePath){
            $id_user = (new Check)->isActif();
            
            $addwiki = new Wiki();
            $addwiki->AddWiki($title, $description, $id_user, $ctgr_id, $selectedTags, $imagePath);
            header("location:?route=add_page_user&succes");
        }

        public function deletewiki($id){
            $delete = new Wiki();
            $delete->DeleteddWiki($id);
            header('location:?route=mywikies_page_user&delete');
        }
}
?>