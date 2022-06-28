<?php
$conn = require "db/ConnectDB.php";
//
//function deleteAdd()
//{
//    $conn = require "db/ConnectDB.php";
//    $sql3 = "SELECT id_add FROM AddValue";
//    $result= mysqli_query($conn, $sql3);
//    $row = mysqli_fetch_row($result);
//    if(mysqli_num_rows($result) > 0){
//            $sql2 = "DELETE FROM AddValue WHERE id_add = '$row[id_add]'";
//            mysqli_query($conn, $sql2);
//        }
//        mysqli_close($conn);
//}

function addMovie()
{
    $conn = require "db/ConnectDB.php";
    if (isset($_POST["title_add"]) && isset($_POST["genre_add"]) && isset($_POST["date"])) {
        $userId = $_SESSION["id"];
        $title_add = $_POST['title_add'];
        $genre_add = $_POST['genre_add'];
        $date = $_POST['date'];


        $sql = "INSERT INTO AddValue (user_id, title_add, genre_add, date) VALUES ('$userId', '$title_add', '$genre_add', '$date')";
        mysqli_query($conn, $sql);
    }

    $conn = require "db/ConnectDB.php";
    $sql1 = "SELECT * FROM AddValue";
    $result = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='card'>
    <div class='card p-3 bg-dark d-inline-flex me-2'>
    <input type='hidden' name='id_add' value='".$row['id_add']."'>
        <div class='card-title text-light'><h4>Title: $row[title_add]</h4></div>
            <div class='card-body text-light'>Genre: $row[genre_add]</div>
            <div class='card-body text-secondary'>Date: $row[date]</div>
            <div class='card-footer'></div>
    </div></div>";
        }
    }
    mysqli_close($conn);
}
?>