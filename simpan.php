<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];

// query
$query = "insert into kontan set id='$id', Nama='$nama', jkel='$jenis_kelamin', Email='$email',Alamat='$alamat' , Kota='$kota', Pesan='$pesan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:tampilkontak.php");
