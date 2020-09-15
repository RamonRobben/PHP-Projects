<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/main.css">
    </head>

    <body>

        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">MVC Framework from Scratch</a>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="?controller=home">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?controller=books&action=index">Books </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?controller=drinks&action=index">Drinks </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container">
                <?php require_once('routes.php'); ?>
            </div>
        </main>

        <footer>
            <p>Copyright 2020 All rights reserved</p>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>