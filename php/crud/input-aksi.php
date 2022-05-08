<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

$sql="INSERT INTO user VALUES('','$nama','$alamat','$pekerjaan')";
$query=mysqli_query($nyambung,$sql);

header("location:tampil.php?pesan=input");
?>