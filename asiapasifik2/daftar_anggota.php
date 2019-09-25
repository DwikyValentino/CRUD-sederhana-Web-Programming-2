<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pendaftaran Asia Pasifik</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		body{
			background-image: url(pacific-ocean.jpg);
		}
	</style>
</head>
<body><br>
	<input type="button" value="Keluar" onclick="window.location.href='logout.php'" /><br>
	<div class="box-form">
		<div class="title-form">
			Pendaftaran Asia Pasifik
		</div>

		<div class="content-form">
			<form action="proses.php" method="post">
				Nama : <br>
				<input type="text" name="nama" maxlength="250" required placeholder="Masukkan nama anda" /><br>

				Username : <br>
				<input type="text" name="username" maxlength="12" required placeholder="Masukkan username anda" /><br>

				Password : <br>
				<input type="password" name="password" maxlength="8" required placeholder="Masukkan password anda" /><br>

				Email : <br>
				<input type="text" name="email" maxlength="250" required placeholder="Masukkan email anda" /><br>

				<input type="submit" value="Daftar"><br><br>
				<a href="Tampilan.php">Daftar Anggota sudah Terdaftar</a>
			</form>
		</div>
	</div>
</body>
</html>