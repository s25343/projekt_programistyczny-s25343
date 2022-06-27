<?php
function GetCards($sql){
    $conn = require "db/ConnectDB.php";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "
    <div class='d-inline-flex' style='width: 14%; margin: 1.33% 1.33%; min-width: 200px'>
        <div class='card p-3 bg-dark d-inline-flex'>
            <img src=$row[img_src] class='card-img-top rounded-3' alt=$row[title]>
            <div class='card-body text-light'>
                <h5 class='card-title'><a href=$row[link]>$row[title]</a></h5>
                <p class='card-text text-secondary'>$row[date]</p>
                ".((isset($_SESSION['session'])) ? "<form method='post'><input type='hidden' name='movieLikeId' value=$row[id]><button value='Like' class='btn btn-outline-warning mb-2'>Like</button></form>":"")."
                <a href='./?id=$row[id]' value='Show details' class='btn btn-primary'>Show details</a>
            </div>
        </div>
    </div>";
        }
    }
    mysqli_close($conn);
}
//date_default_timezone_set('Europe/Warsaw');

function GetMoviePage($sql){
    $conn = require "db/ConnectDB.php";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
    <div class='row row-cols-1 row-cols-md-2 g-4' style='padding-left: 10vw'>
        <div class='col-mb-5'>
                <div class='card bg-dark text-white' style='max-width: 50vw; min-width: 40vw; margin-right: 10vw'>
                    <img src=$row[img_src2] class='card-img' style='margin: 20px; width: auto' alt=$row[director]>
                        <div class='card-img-overlay'>
                            <h3 class='card-title' style='margin: 20px'>$row[title]</h3>
                        </div>
                        <div class='card-body'>
                            <div class='mb-1 card-text text-muted'>$row[director]<span class='badge rounded-pill bg-success' style='margin-left: 15vw'>$row[mark]</span></div>
                            <p class='card-text'>$row[description]</p>
                            <div><span class='badge rounded-pill bg-warning'><h6>Comments</h6></span></div>
                                ".((isset($_SESSION['session'])) ? "<div class='card-footer py-3 border-0'>
                                    <div class='input-group mb-3'>
                                    <form method='POST'>
                                        <span class='input-group-text' id='inputGroup-sizing-default'>Write your comment</span>
                                        <input type='text' name='comments' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                                            <input type='hidden' name='id_user' value=$row[id]>
                                            <input type='hidden' name='id_film' value=$row[id]>
                                            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                                            <button class='btn btn-warning' name='commentSubmit' type='submit'>Comment</button>
                                        </form>
                                    </div>
                                </div>":"")."
                        </div>
            </div>
        </div>
        <div class='col-mb-5' style='width: auto; padding-left: 10vw'>
            <div class='row g-0'></div>
            <div class='card bg-dark text-white' style='max-width: 40vw'>
                <div class='col-mb-4'>
                    <img src=$row[image] class='card-img' style='width: auto; margin: 20px' alt=$row[actors]>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>$row[actors]</h5>
                </div>
                <div class='col-mb-4'>
                    <img src=$row[image2] class='card-img' style='width: auto; margin: 20px' alt=$row[actors2]>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>$row[actors2]</h5>
                </div>
            </div>
        </div>
        <div class='col-mb-5'>
            <div class='card bg-dark' style='padding: 20px; width: 20vw'>
            <div class='card-title text-white'>
            <h5>The trailer for $row[title]</h5>
            </div>
                <iframe src=$row[trailer] allowfullscreen></iframe>
            </div>
        </div>
    </div>";
        }
    }mysqli_close($conn);
}

function checkLogin($email, $pass) {
    $conn = require 'db/ConnectDB.php';
    $sql = "SELECT * FROM Users WHERE email = '$email' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION["session"] = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION["id"] = $row['id'];
            if($row['admin'] == 1){
                $_SESSION["admin"] = true;
            }
        }
        header("location: index.php");
    } else {
        return false;
    }
    mysqli_close($conn);
}

function addReview($movieId){
    $userId = $_SESSION["id"];
    if (isset($movieId) && isset($userId)) {
        $conn = require 'db/ConnectDB.php';
        $sql1 = "SELECT * FROM Reviews WHERE id_user = '$userId' AND id_film = '$movieId'";
        $result = mysqli_query($conn, $sql1);
        if(mysqli_num_rows($result) > 0){
            return false;
        } else {
            $sql = "INSERT INTO Reviews (id_user, id_film) VALUES ('$userId', '$movieId')";
            mysqli_query($conn, $sql);
        }
        mysqli_close($conn);
    }
}

function setComment(){
    $userId = $_SESSION["id"];
    if(isset($_POST['commentSubmit'])){
        $conn = require "db/ConnectDB.php";
        $id_film = $_POST['id_film'];
        $comments = $_POST['comments'];

        $sql = "INSERT INTO Comments (id_user, id_film, comments) VALUES ('$userId', '$id_film', '$comments')";
        $result = mysqli_query($conn, $sql);
    }
}

function getComment(){
    $conn = require "db/ConnectDB.php";
    $sql = "SELECT Users.email, Comments.comments FROM Comments JOIN Users ON Users.id = Comments.id_user";
    $result = mysqli_query($conn, $sql);
    while ($row = $result->fetch_assoc()){
        echo "
            $row[email];
            $row[comments];";
    }
}
?>