<?php 
include'koneksi.php';

$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi2, "insert into data_siswa1 values('','$nama', '$nis', '$alamat')");

header("location:index.php");
?>