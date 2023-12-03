<?php 
$koneksi2 = mysqli_connect("localhost", "root","","html_9");

if(mysqli_connect_errno()){
    echo "koneksi database gagal :" . mysqli_connect_error();
}
?>