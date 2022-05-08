<!DOCTYPE html>
<html>
<head>
<title>Tampil</title>
</head>
<body> 
<div align="center">
<h3>Data Nama</h3>
<table border="1" class="table">
<tr><th>No</th><th>Nama</th></tr>
<?php 
include "koneksi.php";
$sql="select * from nama";
$query=mysqli_query($nyambung,$sql);
$no=1;
while($baris=mysqli_fetch_row($query)){
	$id=$baris[0];
	$nama=$baris[1];
	echo "<tr><td>$no</td><td>$nama</td></tr>";
	$no=$no+1;
	}
?>
</table>
</div>
</body>
</html>
