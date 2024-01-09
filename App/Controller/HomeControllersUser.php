<?php

    namespace App\Controller;
    use App\Models\Wiki;

    class HomeControllersUser{
        public function index(){
            $wikies = new Wiki();
            $results = $wikies->getAllWiki();
            require_once __DIR__.'/../../View/home/index.php';
        }
        public function category_page(){
            $wikies = new Wiki();
            $results = $wikies->getAllWiki();
            require_once __DIR__.'/../../View/home/category.php';
        }
        public function search_page($title ,$category , $tags ){
            $search = new Wiki();
            $results = $search->Search($title , $category , $tags);
            require_once __DIR__.'/../../View/search_page.php';
        }
    }

?>