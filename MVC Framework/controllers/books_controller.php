<?php
class PostsController {
    public function index() {
        $posts = Post::all();
        require_once('views/books/index.php');
    }

    public function show() {
        if (!isset($_GET['id']))
            return call('pages', 'error');

        $post = Post::find($_GET['id']);
        require_once('views/books/show.php');
    }
}
