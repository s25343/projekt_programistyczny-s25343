<?php
$servername = "127.0.0.1";
$database = "MoviesDB";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database, 3306);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
return $conn;
?>

























<!--create database Movies;-->
<!---->
<!---->
<!--drop table films;-->
<!---->
<!---->
<!--CREATE TABLE Films (-->
<!--id int(11) NOT NULL,-->
<!--title varchar(50) NOT NULL,-->
<!--genre varchar(50) NOT NULL,-->
<!--link varchar(500) NOT NULL,-->
<!--description varchar(500) NOT NULL,-->
<!--mark int(11) NOT NULL,-->
<!--director varchar(40) NOT NULL,-->
<!--date datetime NOT NULL,-->
<!--img_src varchar(500) DEFAULT NULL,-->
<!--PRIMARY KEY (id)-->
<!--);-->
<!--insert into Films (id, title, genre, link, description, mark, director, date, img_src) VALUES (0, 'Halo ', 'Action & Adventure', 'https://www.themoviedb.org/tv/52814-halo', 'Depicting an epic 26th-century conflict between humanity and an alien threat known as the Covenant, the series weaves deeply drawn personal stories with action, adventure and a richly imagined vision of the future.', 85, 'Tarantini', '2022-05-15', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pW0UCPX9bvBEYoeQ6U4zi4tv9z7.jpg');-->
<!--# insert into Films VALUES (0, 'Halo ', 'Action & Adventure', 'https://www.themoviedb.org/tv/52814-halo', 'Depicting an epic 26th-century conflict between humanity and an alien threat known as the Covenant, the series weaves deeply drawn personal stories with action, adventure and a richly imagined vision of the future.', 85, '2022-05-15', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pW0UCPX9bvBEYoeQ6U4zi4tv9z7.jpg');-->
<!---->
<!--select *from Films;-->
<!---->
<!---->
