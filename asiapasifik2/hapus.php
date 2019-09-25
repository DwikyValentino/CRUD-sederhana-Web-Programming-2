<?php
	include_once("config.php");

	$id = $_GET['id'];

	$query="DELETE FROM pendaftaran WHERE id = $id";

	$hasil=mysqli_query($connection, $query);

	if ($hasil) {
		header('Location:Tampilan.php');
	}else{
		echo "Hapus data Gagal";
	}
?>