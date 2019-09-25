<?php
$koneksi = mysqli_connect("localhost","root","","asiapasifik2");

// check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>