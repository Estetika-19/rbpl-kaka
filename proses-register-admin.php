<?php
require("koneksi.php");

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Mengambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);
$roles = $_POST['roles'];


// Menyimpan data ke database
$sql = "INSERT INTO admin (username, password, roles) VALUES ('$username', '$password', '$roles')";

if ($conn->query($sql) === TRUE) {
    echo "Admin baru berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();

header("location: index.php");
?>
