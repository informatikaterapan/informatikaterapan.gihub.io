<!DOCTYPE html>
<html>
<head>
<title>CRUD</title>
</head>
<body> 
<div align="center">
<h3>Data user</h3>
<table border="1" class="table">
<tr><th>No</th><th>Nama</th><th>Alamat</th><th>Pekerjaan</th><th>Opsi</th></tr>
<?php 
include "koneksi.php";
$sql="select * from user";
$query=mysqli_query($nyambung,$sql);
$no=1;
while($baris=mysqli_fetch_row($query)){
	$id=$baris[0];
	$nama=$baris[1];
	$alamat=$baris[2];
	$pekerjaan=$baris[3];
	echo "<tr><td>$no</td><td>$nama</td><td>$alamat</td><td>$pekerjaan</td><td><a href='edit.php?id=$id>'>Edit</a> | <a href='hapus.php?id=$id>'>Hapus</a></td><tr>";
	$no=$no+1;
	}
?>
</table>
<br><br>
<?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "Data berhasil di input.";
	}
	else if($pesan == "update"){
		echo "Data berhasil di update.";
	}
	else if($pesan == "hapus"){
		echo "Data berhasil di hapus.";
	}
}
?>
<br>
<a href="input.php">Tambah Data</a>
</div>
</body>
</html>