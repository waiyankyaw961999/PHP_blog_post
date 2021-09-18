<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  Font Awesome for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
          integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX"
          crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>MM-Coder</title>
    <style>

    </style>
</head>

<body>
<!-- Start Nav -->
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand text-warning" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Articles</a>
            </li>
            <li class="nav-item dropdown">
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                    $user_id = $_SESSION['user_id'];
                    if (isset($user_id)) {
                        ?>
                        <?php
                    } else {
                        ?>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <a class="dropdown-item" href="#">Login</a>
                        <a class="dropdown-item" href="#">Register</a>
                        <?php
                    }
                    ?>
                </div>
            </li>
            <li class="nav-item ml-5">
                <a class="nav-link btn btn-sm  btn-warning" href="#">
                    <i class="fas fa-plus"></i>
                    Create Article</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search"
                   aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<!-- Start Header -->
<div class="jumbotron jumbotron-fluid header">
    <div class="container">
        <h1 class="text-white">PHP Real Project</h1>
        <h1 class="display-4 text-white">Welcome from PHP blog post</h1>
        <br>
        <?php
        $user = Helper::auth();
        if (isset($user_id)) {
            ?>
            <a href='../action/logout_post.php' class='btn btn-outline-success'>Logout</a>
            <h2> Welcome <?php echo ucfirst($user->name) ?></h2>
            <?php
        } else {
            ?>
            <a href='../register.php' class='btn btn-warning'>Create Account</a>
            <a href='../login.php' class='btn btn-outline-success'>Login</a>
            <?php
        }
        ?>

    </div>
</div>

<!-- Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 pr-3 pl-3">
            <!-- Category List -->
            <div class="card card-dark">
                <div class="card-header">
                    <h4>All Category</h4>
                </div>
                <div class="card-body">
                    <?php
                    $category = DB::raw('SELECT *,
                                                                (SELECT count(id) from articles WHERE category_id = category.id) as article_count from category')->get();
                    ?>
                    <ul class="list-group">
                        <?php
                        foreach ($category as $c) { ?>
                            <li
                                    class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo $c->name; ?>
                                <span class="badge badge-primary badge-pill"><?php echo $c->article_count; ?></span>
                            </li>
                            <?php
                        }
                        ?>

                    </ul>
                </div>

            </div>
            <hr>
            <!-- Language List -->
            <div class="card card-dark">
                <div class="card-header">
                    <h4>All Languages</h4>
                </div>

                <div class="card-body">
                    <?php
                    $language = DB::raw('SELECT *,
(SELECT count(id) from article_language WHERE article_language.language_id = languages.id) as article_count from languages ')->get();
                    ?>
                    <ul class="list-group">
                        <?php
                        foreach ($language as $l) { ?>
                            <li
                                    class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo $l->name ?>
                                <span class="badge badge-primary badge-pill"><?php echo $l->article_count ?></span>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Content -->
        <div class="col-md-8">