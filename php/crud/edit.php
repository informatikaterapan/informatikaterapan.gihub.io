<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
</head>
<body>		
<br/>
<a href="tampil.php">Lihat Semua Data</a>
<br/>
<h3>Edit data</h3>
<form action="update.php" method="post">		
<table>
<?php 
include "koneksi.php";
$id = $_GET['id'];
$sql="select * from user where id='$id'";
$query=mysqli_query($nyambung,$sql);
while($baris=mysqli_fetch_row($query)){
	$id=$baris[0];
	$nama=$baris[1];
	$alamat=$baris[2];
	$pekerjaan=$baris[3];
	echo "<tr><td>Nama</td><td><input type='hidden' name='id' value='$id'><input type='text' name='nama' value='$nama'></td></tr>";	
	echo "<tr><td>Alamat</td><td><input type='text' name='alamat' value='$alamat'></td></tr>"; 	
	echo "<tr><td>Pekerjaan</td><td><input type='text' name='pekerjaan' value='$pekerjaan'></td></tr>";	
	echo "<tr><td></td><td><input type='submit' value='Simpan'></td></tr>";	
	}
?>
	</table>
	</form>
</body>
</html>