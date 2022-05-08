<?php
include "koneksi.php";
$sql="TRUNCATE TABLE nama";
$query=mysqli_query($nyambung, $sql);
if($query){
	echo"berhasil";
}
else{
	echo"gagal";
}
?>
