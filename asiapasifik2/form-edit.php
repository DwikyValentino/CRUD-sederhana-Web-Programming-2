<?php
	include_once("config.php");
	$id=$_GET['id'];


	$query="SELECT * FROM pendaftaran WHERE id=" . $id;

	$hasil=mysqli_query($connection, $query);


?>
<head>
	<title>List Daftar Asia Pasifik</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		body{
			background-image: url(pacific-ocean.jpg);
		}
	</style>
</head>
	<div class="box-form2">
	<div class="title-form2">Ubah Data</div>
	<div class="content-form2">
	<form method="post" action="update.php">

		<?php while ($data=mysqli_fetch_array($hasil)) { ?>
		<table border="0" cellpadding="0" cellspacing="1"><br>
			<tr>
				<td>Nama : </td>
				<td> <input type="text" name="nama" maxlength="250" required placeholder="Masukkan kembali nama anda" value="<?php echo$data['nama'] ?>"></td>
			</tr>
			<tr>
				<td>Username : </td>
				<td> <input type="text" name="username" maxlength="10" required placeholder="Masukkan kembali username anda" value="<?php echo$data['username']?>"></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td> <input type="password" name="password" maxlength="8" required placeholder="Masukkan kembali password anda" value="<?php echo$data['password']?>" ></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td> <input type="text" name="email" maxlength="250" required placeholder="Masukkan kembali email anda" value="<?php echo$data['email']?>" ></td>
			</tr>
			<tr>
				<td> </td>
				<input type="hidden" name="id" value="<?php echo$data['id']?>">
				<td><input type="submit" name="UbahData" value="Ubah Data" onClick="return confirm('Anda yakin ingin mengubah data ini?');"></td>
			</tr>
		</table>

	<?php } ?>
	<a href="Tampilan.php">Kembali</a>
	</form>
</div>