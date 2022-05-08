<?php 
include 'koneksi.php';
$id = $_GET['id'];
$sql="delete from user where id='$id'";
$query=mysqli_query($nyambung,$sql);
header("location:tampil.php?pesan=hapus");
?>