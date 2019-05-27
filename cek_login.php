<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database

include 'koneksi.php';

include 'config/koneksi.php';

// menangkap data yang dikirim dari form login
// ambil data hasil submit dari form
	$username = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['username'])))));
	$password = md5(mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['password']))))));


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' or nik='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:module/admin/halaman_admin.php");

	// cek jika user login sebagai user
	}else if($data['level']=="pemilih"){
		// buat session login dan username
		$_SESSION['nik'] = $username;
		$_SESSION['level'] = "pemilih";
		// alihkan ke halaman dashboard user
		header("location:module/pemilih/halaman_pemilih.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}

?>