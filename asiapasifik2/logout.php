<?php
  session_start();
  session_destroy();
  echo "<script>alert('Anda sudah keluar dari halaman Pendaftaran. Silahkan Masuk Kembali'); window.location = 'index.php'</script>";
?>
