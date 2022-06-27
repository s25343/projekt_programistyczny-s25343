<?php
    function signIn($email, $pass){
    $conn = require 'db/ConnectDB.php';
        $sql = "SELECT * FROM Users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo '<script>
                alert("This user already exists");
                window.location.href="index.php";
                </script>';
        } else {
            $sqlsignin = "INSERT INTO Users (email, password) VALUES ('$email', '$pass')";
            $res = mysqli_query($conn, $sqlsignin);
            echo '<script>
                alert("Registration completed successfully");
                window.location.href="index.php";
                </script>';
    }
        mysqli_close($conn);
}
signIn($_POST["signInEmail"], $_POST["signInPassword"]);
?>