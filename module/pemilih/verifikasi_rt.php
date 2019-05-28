<?php 

        	include_once("../../config/koneksi.php");

            session_start();
            // cek apakah yang mengakses halaman ini sudah login
            if($_SESSION['level']==""){
                header("location:../../../index.php?pesan=gagal");
            }

            $id_user = $_SESSION['id_user'];

           $cek    = mysqli_num_rows(mysqli_query($koneksi,"SELECT id_user, status FROM pilihan_rt WHERE id_user='$id_user' AND status = 1"));
            if ($cek > 0){
                echo "<script>window.alert('Anda Sudah Mendaftar')
                        window.location='halaman_pemilih.php'</script>";
            }else {
                header("Location:pemilihan_rt.php");
            }

		?>