<?php
$host = "localhost"; //nama host database
$username = "root"; //username database
$password = ""; //password database
$dbname = "ant_restoran"; //nama database

//buat koneksi
$conn = mysqli_connect($host, $username, $password, $dbname);

//check koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>