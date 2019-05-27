<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pemilih</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Pemilih</h1>

	<p>Halo <b><?php echo $_SESSION['nik']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="../logout.php">LOGOUT</a>

	<br/>
	<br/>

</body>
</html>