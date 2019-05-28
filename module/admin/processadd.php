<?php
	session_start();

	include_once("../../../config/koneksi.php");

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../../index.php?pesan=gagal");
	}

	else {
		$act = isset($_GET['act']) ? $_GET['act'] : '';
    
    	if ($act == 'insert') {
        // print_r($_POST);die();
        	if (isset($_POST['add'])) {
        		
        		$nama     = mysqli_real_escape_string($koneksi, trim($_POST['nama']));
        		$username = mysqli_real_escape_string($koneksi, trim($_POST['username']));
        		$password = md5(mysqli_real_escape_string($koneksi, trim($_POST['password'])));
        		$nik      = mysqli_real_escape_string($koneksi, trim($_POST['nik']));
        		$id_dpt   = mysqli_real_escape_string($koneksi, trim($_POST['id_dpt']));
        		$alamat   = mysqli_real_escape_string($koneksi, trim($_POST['alamat']));
        		$level    = mysqli_real_escape_string($koneksi, trim('pemilih'));

        		//Simpan ke tabel dpt
        		$query = mysqli_query($koneksi, "INSERT INTO user(nama,username,password,nik,id_dpt,alamat,level)
        			VALUES ('$nama','$username','$password','$nik','$id_dpt','$alamat', '$level')")
	                or die('Ada kesalahan pada query insert : '.mysqli_error($koneksi));

	             if ($query) {
             		// jika berhasil tampilkan pesan berhasil simpan data
                	header("location: adduser.php?alert=3");
            	}

        	}
        }
	}
?>