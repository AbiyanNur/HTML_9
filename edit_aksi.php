<?php
include 'koneksi.php'; 

$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi2, "update data_siswa1 set nama= '$nama', nis='$nis', alamat='alamat' where id='$id'");

header("location:index.php");
?>
