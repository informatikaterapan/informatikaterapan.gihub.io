<?php 
include "koneksi.php";
include "excel_reader2.php";

$target = basename($_FILES['nama']['name']) ;
move_uploaded_file($_FILES['nama']['tmp_name'], $target);

chmod($_FILES['nama']['name'],0777);

$data = new Spreadsheet_Excel_Reader($_FILES['nama']['name'],false);
$jumlah_baris = $data->rowcount($sheet_index=0);

$nourut = 1;
for ($i=3; $i<=$jumlah_baris; $i++){
	
	$no = $data->val($i, 1);
	$nama = $data->val($i, 2);
	
	$sql="INSERT into nama values('$no','$nama')";
	$query=mysqli_query($nyambung,$sql);
	echo "berhasil tambah data ke-$nourut <br>";
	$nourut++;
	
}
?>
