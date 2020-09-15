<?php
function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch ($controller) {
        case 'pages':
            $controller = new PagesController();
            break;
        case 'books':
            require_once('models/book.php');
            $controller = new PostsController();
            break;
        case 'drinks':
            require_once('models/drink.php');
            $controller = new PostsController();
            break;
    }

    $controller->{$action}();
}

$controllers = array(
    'pages' => ['home', 'error'],
    'books' => ['index', 'show'],
    'drinks' => ['index', 'show']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
