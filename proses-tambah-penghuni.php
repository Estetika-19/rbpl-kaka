<?php
// $server = "localhost";
// $user = "root";
// $password = "";
// $database = "kostan";
// $port ="3307";

require_once("koneksi.php");

$conn = new mysqli($server, $user, $password, $database, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form
$nama = $_POST['nama'];
$no_kamar = $_POST['no_kamar'];
$nik = $_POST['nik'];
$tgl_masuk = $_POST['tgl_masuk'];
$tgl_keluar = $_POST['tgl_keluar'];

// Menyimpan data ke database
$sql = "INSERT INTO penghuni (nama, no_kamar, nik, tgl_masuk, tgl_keluar) VALUES ('$nama', '$no_kamar', '$nik', '$tgl_masuk', '$tgl_keluar')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Penghuni baru berhasil ditambahkan');
        window.location.href = 'penghuni.php';
    </script>";
} else {
    echo "<script>
        alert('Error: " . $sql . "<br>" . $conn->error . "');
        window.location.href = 'penghuni.php';
    </script>";
}

// Menutup koneksi
$conn->close();
?>
