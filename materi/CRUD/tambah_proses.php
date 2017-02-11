<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

mysql_query("INSERT INTO siswa VALUES('',$nama','$nim','$alamat')");

header("location:halaman_awal.php?");
?>