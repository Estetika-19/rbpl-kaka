<?php 
// session_start();

$server = "localhost";
$user = "root";
$password = "";
$database = "kostan";
$port ="3307";

$db = mysqli_connect($server, $user, $password, $database, $port);

$conn = new mysqli($server, $user, $password, $database, $port);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>