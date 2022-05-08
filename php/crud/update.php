<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$sql="update user set nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' WHERE id='$id'";
$query=mysqli_query($nyambung,$sql);
header("location:tampil.php?pesan=update");

?>