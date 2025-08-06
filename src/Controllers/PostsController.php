<?php

namespace App\Controllers;

use App\Models\Post;
use App\DB;
use DateTime;



class PostsController {
    public function index() {
        $posts = Post::all(); 
        include __DIR__ . '/../../views/posts/index.php';
    }
    public function create() {
        include __DIR__ . '/../../views/posts/create.php';
    }
    public function store() {
    ini_set('display_errors', 1); // Optional: for debugging
    error_reporting(E_ALL);

    $post = new Post();
    $post->title = $_POST['title'];
    $post->body = $_POST['body'];
   $post->created = date('Y-m-d H:i:s');
    $post->save();
    redirect('/admin/posts'); 
    }

    public function edit() {
        $post = Post::find($_GET['id']);
        include __DIR__ . '/../../views/posts/edit.php';
    }

    public function update() {
        $post = Post::find($_GET['id']);
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/admin/posts'); // saadab pärast uuendamist postituste lehele tagasi
    }

    public function view() {
        $post = Post::find($_GET['id']);
        include __DIR__ . '/../../views/posts/view.php';
    }

    public function destroy() {
        $post = Post::find($_GET['id']);
        $post->delete();
        redirect('/admin/posts'); // saadab pärast uuendamist postituste lehele tagasi
    }
}

