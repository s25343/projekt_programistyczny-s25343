<!DOCTYPE html>
<HTML lang="EN">
<?php require "Functions.php";
session_start();
 if(isset($_POST["email"]) && isset($_POST["password"])){
     checkLogin($_POST["email"], $_POST["password"]); }
 if(isset($_POST["movieLikeId"])){
     addReview($_POST["movieLikeId"]); }
if(isset($_POST["id_film"])){
    setComment();
} ?>
<head>
    <style>
        body {
            background-image: url('https://cutewallpaper.org/21/dark-souls-3-2560x1080/Illustration-of-city,-Dark-Souls-III,-Irithyll,-video-games-.jpg');
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>


<body>
<header>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a class="d-flex btn btn-outline-success text-light m-2"  href="./">Main</a>
            <form action="index.php" method="post" class="d-flex m-2" role="search">
                <input class="form-control me-2" name="Search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success text-light me-4" type="submit">Search</button>
            </form>
        <?php
        if(isset($_SESSION["session"])) { ?>
            <a href="./Profile.php" class="btn btn-primary me-2">Profile</a>
            <a href="./Logout.php" class="btn btn-primary">Log out</a>
       <?php } else { ?>
            <form class="d-flex m-2">
                <button onclick = "toggleModal('.login-modal')" type = "button" class="btn btn-outline-light me-2" >Login</button >
                <button onclick="toggleModal('.signin-modal')" type = "button" class="btn btn-primary" style = "width: 100px">Sign-up</button >
            </form>
       <?php };
           ?>
        </div>
    </nav>
</header>

<main class="conteiner">
    <section class="py-5 text-center container dark">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="display-2 fw-dark text-light">Movies</h1>
            <form action="index.php" method="POST" class="input-group">
                <select id="Genres" name="Genres" class="form-select">
                    <option value="None" selected>None</option>
                    <option value="Action">Action</option>
                    <option value="Crime">Crime</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Drama">Drama</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Mystery">Mystery</option>
                    <option value="Documentary">Documentary</option>
                </select>
                <button name="GenresForm" type="submit" value="Find by genre" class="btn btn-primary">Find by genre</button>
            </form>
                <form action="index.php" method="post" class="d-flex m-2" role="search">
                    <input class="form-control me-2" name="year" type="search" placeholder="Year" aria-label="Choose year">
                    <button class="btn btn-outline-primary text-light me-4" type="submit">Year</button>
                </form>
        </div>
    </section>
    <section class="d-flex w-100 aling-items-center justify-content-center">
    <?php
    if (isset($_GET["id"])){
        GetMoviePage("SELECT * FROM Films WHERE id LIKE '$_GET[id]'");
    } else { ?>
    <div class="flex-wrap d-flex flex-row" style="width: 95%"> <?php
        if(isset($_POST['Genres']) && $_POST['Genres']!="None") {
            GetCards("SELECT * FROM Films WHERE genre LIKE '%$_POST[Genres]%'");
        } else if(isset($_POST['Search'])) {
            GetCards("SELECT * FROM Films WHERE title LIKE '%$_POST[Search]%'");
        } else if(isset($_POST['year'])){
            GetCards("SELECT * FROM Films WHERE date LIKE '%$_POST[year]%'");
        } else {
            GetCards("SELECT * FROM Films");
        } ?>
        </div>
    <?php }?>
    </section>
    <div class="modal login-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button onclick="toggleModal('.login-modal')" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="login" method="post">
                        <input class="form-control me-2 mb-2" name="email" type="email" placeholder="Login" aria-label="Login">
                        <input class="form-control me-2 mb-2" name="password" type="password" placeholder="Password" aria-label="Password">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal signin-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign-in</h5>
                    <button onclick="toggleModal('.signin-modal')" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./SignIn.php" name="sign-in" method="post">
                        <input class="form-control me-2 mb-2" name="signInEmail" type="email" placeholder="Login" aria-label="Login">
                        <input class="form-control me-2 mb-2" name="signInPassword" type="password" placeholder="Password" aria-label="Password">
                        <button type="submit" class="btn btn-primary">Sign-up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="container-fluid py-3 mt-3 bg-dark">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="./index.php" class="nav-link px-2 text-muted">Main</a></li>
                <li class="nav-item"><a href="./About.php" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        <p class="text-center text-muted">2022, Katsiaryna Kavaliova</p>
</footer>
<script type="text/javascript" src="js/index.js"></script>
</body>
</HTML>
