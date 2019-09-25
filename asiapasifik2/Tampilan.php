<?php
include 'config.php';
$query = mysqli_query($connection,"SELECT * FROM pendaftaran ORDER BY id DESC");
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
<body>
<div class="box-form1">
	<div class="title-form1">List yang sudah Mendaftar di Asia Pasifik</div>
	<div class="content-form1">
		<form action="" method="post">
				<table border="1" cellpadding="0" cellspacing="1">
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Password</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				<?php if(mysqli_num_rows($query)>0) { ?>
				<?php 
					$no = 1;
					while ($data = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $no ?></td>
						<td><?php echo $data['nama'];?></td>
						<td><?php echo $data['username'];?></td>
						<td><?php echo $data['password'];?></td>
						<td><?php echo $data['email'];?></td>
						<td>
							<a href="form-edit.php?id=<?php echo $data['id']; ?>"> Edit </a> | 
							<a href="hapus.php?id=<?php echo $data['id']; ?>" onClick="return confirm('Anda yakin ingin menghapus ini?');"> Hapus </a>
						</td>
					</tr>
					<?php $no++; } ?>
					<?php } ?>
					<a href="daftar_anggota.php">Kembali</a><br><br>
				</table>
			</form>
	</div>
</div>
</body>