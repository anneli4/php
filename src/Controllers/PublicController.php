<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController {
    public function index() {
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

