<?php
include("koneksi.php");

$sql = "SELECT DATE_FORMAT(tgl_bayar, '%Y-%m') as month, SUM(jumlah) as total_payments 
        FROM pembayaran 
        GROUP BY DATE_FORMAT(tgl_bayar, '%Y-%m')";
$result = $conn->query($sql);

$monthly_payments = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $monthly_payments[] = $row;
    }
}

echo json_encode($monthly_payments);
?>
