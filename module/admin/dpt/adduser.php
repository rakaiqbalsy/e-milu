<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<?php 
	session_start();

	include_once("../../../config/koneksi.php");

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../../index.php?pesan=gagal");
	}

	?>

	<?php  
      // fungsi untuk menampilkan pesan
      // jika alert = "" (kosong)
      // tampilkan pesan "" (kosong)
      if (empty($_GET['alert'])) {
        echo "";
      } 
      // jika alert = 1
      // tampilkan pesan Gagal "Username atau Password salah, cek kembali Username dan Password Anda"
      elseif ($_GET['alert'] == 1) {
        echo "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>  <i class='icon fa fa-times-circle'></i> Gagal Login!</h4>
                Username atau Password salah, cek kembali Username dan Password Anda.
              </div>";
      }
      // jika alert = 2
      // tampilkan pesan Sukses "Anda telah berhasil logout"
      elseif ($_GET['alert'] == 2) {
        echo "<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
                Anda telah berhasil logout.
              </div>";
      }

      elseif ($_GET['alert'] == 3) {
        echo "<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
                Data berhasil disimpan
              </div>";
      }
      ?>
	<h1>Halaman Admin</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

	<a href="../../logout.php">LOGOUT</a>

	<br/>
	<br/>

	<form action="processadd.php?act=insert" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Pemilih</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr> 
                <td>NIK</td>
                <td><input type="number" name="nik"></td>
            </tr>

            <tr style="width: 50px">
            	<td> DPT </td>
            	<td> 
                <select class="chosen-select" id="id_dpt" name="id_dpt" data-placeholder="-- Pilih DPT --"  autocomplete="off" required style="width: 150px;">
                  <option value="<?php echo $data['id_dpt'] ?>"></option>
                  <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM dpt ORDER BY id_dpt ASC")
                  or die('Ada kesalahan pada query tampil jadwal: '.mysqli_error($mysqli));
                  while ($data = mysqli_fetch_assoc($query)) {
                  echo"<option value=\"$data[id_dpt]\"> $data[id_dpt]</option>";
                  }
                  ?>
                </select>
                </td>
            </tr>

            <tr> 
                <td>Alamat</td>
                <td><input type="text-area" name="alamat"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="add" value="add"></td>
            </tr>
        </table>
    </form>
	
</body>
</html>