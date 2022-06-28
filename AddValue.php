<!DOCTYPE html>
<?php
require "AddMovie.php";
require "deleteMovie.php";
session_start();
if(isset($_SESSION["session"])){

} else {
    header('location: index.php');
}  ?>
<html>
<head>
    <style>
        body {
            background-image: url('https://cutewallpaper.org/21/dark-souls-3-2560x1080/Illustration-of-city,-Dark-Souls-III,-Irithyll,-video-games-.jpg');
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a class="d-flex btn btn-outline-success text-light m-2"  href="./">Main</a>
            <div class="d-flex text-light m-2"><h3><span class='badge rounded-pill bg-success'>Suggestions</span></h3></div>
            <a href="./Logout.php" class="btn btn-primary">Log out</a>
        </div>
    </nav>
</header>
<main>

<?php
require "db/ConnectDB.php";
    addMovie();
//    if(isset($_POST['delete'])){
//        deleteAdd();
//    }
?>
</main>
</body>
</html>
