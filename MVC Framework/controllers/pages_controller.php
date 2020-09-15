<?php
class PagesController {
    public function home() {
        $first_name = 'Ramon';
        $last_name  = 'Robben';
        require_once('views/pages/home.php');
    }

    public function error() {
        require_once('views/pages/error.php');
    }
}
