<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>

<body>
    <form method="post" action="simpan.php">
        <table>
            <tr>
                <td>ID</td>
                <td> <input type="text" onkeyup="isi_otomatis()" name="id">
                </td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td> <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td> <input type="text" name="jenis_kelamin"></td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td> <input type="text" name="email"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>
                    <input type="text" name="alamat">
                </td>
            </tr>
            <tr>
                <td>KOTA</td>
                <td>
                    <input type="text" name="kota">
                </td>
            </tr>
            <tr>
                <td>PESAN</td>
                <td>
                    <input type="text" name="pesan">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" value="simpan">SIMPAN</button>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit"> <a href="tampilkontak.php">LIHAT DATA</a> </button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>