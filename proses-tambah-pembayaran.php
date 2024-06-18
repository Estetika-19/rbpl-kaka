<?php
// $server = "localhost";
// $user = "root";
// $password = "";
// $database = "kostan";
// $port = "3307";

require_once("koneksi.php");

$conn = new mysqli($server, $user, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Getting data from form
$id_penghuni = $_POST['id_penghuni'];
$tgl_bayar = $_POST['tgl_bayar'];
$jumlah = $_POST['jumlah'];

// Inserting data into the database
$sql = "INSERT INTO pembayaran (id_penghuni, tgl_bayar, jumlah) VALUES ('$id_penghuni', '$tgl_bayar', '$jumlah')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Pembayaran baru berhasil ditambahkan');
        window.location.href = 'pembayaran.php';
    </script>";
} else {
    echo "<script>
        alert('Error: " . $sql . "<br>" . $conn->error . "');
        window.location.href = 'pembayaran.php';
    </script>";
}

// Closing the connection
$conn->close();
?>
