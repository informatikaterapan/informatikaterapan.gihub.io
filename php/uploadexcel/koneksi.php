<?php
$host="localhost";
$username="root";
$password="";
$database="latihan";
$nyambung=mysqli_connect($host,$username,$password,$database);
if($nyambung){
	echo "Koneksi ke Database Berhasil";
}
else{
	echo "Koneksi ke Database Gagal";
}
?>
