<?php
	include_once("config.php");

	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];

	$query="UPDATE pendaftaran SET nama='$nama', username='$username', password='$password', email='$email' WHERE id=$id";

	$hasil=mysqli_query($connection, $query);

	if ($hasil) {
		header('Location:Tampilan.php');
	} else {
		echo "Update Data Gagal";
	}
?>