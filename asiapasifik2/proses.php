<?php
	$server = "localhost"; //nama seerver
	$username = "root"; //nama username mysql
	$password = ""; //password
	$database = "asiapasifik2"; //nama database dipakai

	mysql_connect($server,$username,$password) or die("Koneksi Gagal");
	//koneksi ke database
	mysql_select_db($database) or die("Database tidak ada");
	//memilih database, menampilkan pesan jika gagal
	//mengambil data dari form

	$Nama = $_POST['nama'];
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	$Email = $_POST['email'];

	//input ke tabel pendaftaran
	$input = mysql_query("INSERT INTO pendaftaran (nama, username, password, email) VALUES ('$Nama','$Username','$Password','$Email')");
	//cek sudah terinput atau belum
	if ($input) //jika sukses
	{
		echo "Berhasil Terdaftar";
	}
	else
	{
		echo "Gagal Terdaftar";
	}
?>

<a href="daftar_anggota.php">Kembali</a>