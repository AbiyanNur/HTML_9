<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi2, "delete from data_siswa1 where id='$id'");

header("location:index.php");
?>