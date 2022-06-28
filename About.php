<!DOCTYPE html>
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
            <?php }
            ?>
        </div>
    </nav>
</header>
<main>
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
    <div class='card bg-dark text-white' style="margin-top: 10vw; margin-bottom: 30vw; margin-right: 15vw; margin-left: 15vw">
        <div class='card-body'>
            <div class='mb-1 card-text'><h3 class='card-title' style='margin: 20px'>This web-site was made by Katsiaryna Kavaliova (index: s25343) in 2022</h3></div>
        </div>
    </div>
<footer class="container-fluid py-3 mt-3 bg-dark">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="./index.php" class="nav-link px-2 text-muted">Main</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">2022, Katsiaryna Kavaliova</p>
</footer>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>
