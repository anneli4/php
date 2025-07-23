<?php

namespace App\Controllers;

class PublicController {

    public function index() {
            $heroTitle = 'World news';
                $posts = [
                    ['title' => 'Blogi 1','date' => 'July 1, 2025','author' => 'Anneli','content' => 'See on minu esimene postitus. Tere tulemast!'],
                    ['title' => 'Blogi 2','date' => 'July 2, 2025','author' => 'Anneli','content' => 'Täna oli päikseline päev.'],  

         ];
    include __DIR__ . '/../../views/index.php';
    }

    public function us() {
         $heroTitle = 'U.S. news';
            $posts = [
                ['title' => 'U.S esimene blogi','date' => 'July 1, 2025','author' => 'Anneli','content' => 'See on minu esimene postitus. Tere tulemast!'],
                ['title' => 'U.S. teine blogi','date' => 'July 2, 2025','author' => 'Anneli','content' => 'Täna oli päikseline päev ja ma kirjutasin natuke PHP-d.']
        ];
    include __DIR__ . '/../../views/us.php';
    }

    public function form(){
        $name = $_GET['firstname'] ?? null;
        $age = $_GET['age'] ?? null;
        include __DIR__ . '/../../views/form.php';
    }
        public function answer(){
        dump($_GET);
    }
}