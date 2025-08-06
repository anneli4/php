<?php

namespace App\Controllers;


use App\Models\Post;



class PublicController {
    public function index() {
       // setcookie('mycookie', 'tasty', time() + 3600, null, null, true, false);
       // dump($_COOKIE);
        
        //dump($_SESSION); //kui cookie väärtust saab muuta siis sessioni oma mitte
        $posts = Post::all();
        $heroTitle = 'World news';   
        include __DIR__ . '/../../views/index.php';
    }

    public function us() {
         $heroTitle = 'U.S. news';
         $posts = Post::all();
    include __DIR__ . '/../../views/us.php';
    }

    public function form(){
        $name = $_GET['firstname'] ?? null;
        $age = $_GET['age'] ?? null;
        include __DIR__ . '/../../views/form.php';
    }
    
        public function answer(){
        dump($_GET, $_POST);
    }
        public function getAnswer(){
        dump($_GET);
    }
}

