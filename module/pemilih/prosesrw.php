<?php
	session_start();

	include_once("../../config/koneksi.php");

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../../index.php?pesan=gagal");
	}

	else {
		$act = isset($_GET['act']) ? $_GET['act'] : '';
    
    	if ($act == 'insert') {
        // print_r($_POST);die();
        	if (isset($_POST['simpan'])) {


        		$id_user = $_SESSION['id_user'];
        		$id_dpt  = $_SESSION['id_dpt']; 

        		$pilihan	 	= mysqli_real_escape_string($koneksi, trim($_POST['pilihan']));
        		$status    		= mysqli_real_escape_string($koneksi, trim('1'));

        		//Simpan ke tabel dpt
        		$query = mysqli_query($koneksi, "INSERT INTO pilihan_rw(id_user,id_dpt,no_urut,status)
        			VALUES ('$id_user','$id_dpt','$pilihan','$status')")
	                or die('Ada kesalahan pada query insert : '.mysqli_error($koneksi));

	                if ($query) {
             		 // jika berhasil tampilkan pesan berhasil simpan data
                	
                        $cek    = mysqli_num_rows(mysqli_query($koneksi,"SELECT id_user, status FROM pilihan_rt WHERE id_user='$id_user' AND status = 1"));
                              if ($cek > 0){
                                header("location: halaman_pemilih.php");
                              }else {
                                header("Location:pemilihan_rt.php");
                              }
            	   }
        	}
        }
     }