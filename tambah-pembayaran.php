<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembayaran</title>
    <style>
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }
        td, th {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        button {
            margin: 20px auto;
            display: block;
        }
    </style>
</head>
<body>
    <form action="proses-tambah-pembayaran.php" method="post">
        <table border="1">
            <tr>
                <th><label for="nama">id_penghuni</label></th>
                <td><input type="text" name="id_penghuni" id="id_penghuni" required></td>
            </tr>
            <tr>
                <th><label for="no_kamar">tgl_bayar</label></th>
                <td><input type="date" name="tgl_bayar" id="tgl_bayar" required></td>
            </tr>
            <tr>
                <th><label for="jumlah">Jumlah</label></th>
                <td><input type="integer" name="jumlah" id="jumlah" required></td>
            </tr>
        </table>
        <button type="submit">Tambah Pembayaran</button>
    </form>
</body>
</html>
