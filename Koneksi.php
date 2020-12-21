<?php 
 
$conn = mysqli_connect("localhost","root","aris","nim");
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>