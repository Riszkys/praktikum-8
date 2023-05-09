<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2> List KONTAK </h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>KOTA</th>
            <th>PESAN</th>
        </tr>
        <?php
        include 'koneksi.php';
        $kontak = mysqli_query($koneksi, "SELECT * FROM kontan");
        $no = 1;
        foreach ($kontak as $row) {
            echo "<tr>
            <td>$no</td>
            <td>" . $row['Nama'] . "</td>
            <td>" . $row['jkel'] . "</td>
            <td>" . $row['Email'] . "</td>
            <td>" . $row['Alamat'] . "</td>
            <td>" . $row['Kota'] . "</td>
            <td>" . $row['Pesan'] . "</td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    <button type="submit"> <a href="tambahkontak.php">Tambah Data</a> </button>
</body>

</html>