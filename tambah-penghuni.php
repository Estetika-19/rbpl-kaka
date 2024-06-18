<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penghuni</title>
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
    <form action="proses-tambah-penghuni.php" method="post">
        <table border="1">
            <tr>
                <th><label for="nama">Nama Penghuni</label></th>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <th><label for="no_kamar">Nomor Kamar</label></th>
                <td><input type="text" name="no_kamar" id="no_kamar" required></td>
            </tr>
            <tr>
                <th><label for="no_kamar">NIK</label></th>
                <td><input type="text" name="nik" id="nik" required></td>
            </tr>
            <tr>
                <th><label for="tgl_masuk">Tanggal Masuk</label></th>
                <td><input type="date" name="tgl_masuk" id="tgl_masuk" required></td>
            </tr>
            <tr>
                <th><label for="tgl_keluar">Tanggal Keluar</label></th>
                <td><input type="date" name="tgl_keluar" id="tgl_keluar"></td>
            </tr>
        </table>
        <button type="submit">Tambah Penghuni</button>
    </form>
</body>
</html>
