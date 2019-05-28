<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Voting | Tambah DPT</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../../asset/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../../asset/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="../../asset/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../../asset/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../../asset/css/magnific-popup.css">
    <link rel="stylesheet" href="../../asset/css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../../asset/css/swiper.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../../asset/css/style.css">
</head>

<body>

  <?php 
      session_start();
      // cek apakah yang mengakses halaman ini sudah login
      if($_SESSION['level']==""){
          header("location:../../../index.php?pesan=gagal");
      }
  ?>


<!--::header part start::-->
<header class="header_area">
    <div class="sub_header">
        <div class="container">
            <div class="row align-items-center">
              <div class="col-md-4 col-xl-6">
                  <div id="logo">
                      <a href="index.html"><img src="../../asset/img/banner-kpu.png" alt="" height="80" title="" /></a>
                  </div>
              </div>
              <div class="col-md-8 col-xl-6">
                  <div class="sub_header_social_icon float-right">
                    <a href="#"><i class="flaticon-phone"></i>+62 857 2160 3080</a>
                    <a href="halaman_admin.php" class="register_icon"><i class="ti-arrow-right"></i>KEMBALI</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link active" href="halaman_admin.php">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Calon
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="elements.html">RW</a>
                                        <a class="dropdown-item" href="single-blog.html">RT</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">Bantuan</a>
                                </li>
                            </ul>
                            <div class="header_social_icon d-none d-lg-block">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li>
                                        <a href="#"> <i class="ti-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="header_social_icon d-block d-lg-none">
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li>
                                <a href="#"> <i class="ti-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->
    

  <?php 
    //session_start();

    include_once("../../config/koneksi.php");

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
      header("location:../index.php?pesan=gagal");
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


	<!--::breadcrumb part start::-->
    <section class="breadcrumb breadcrumb_bg">
		  <div class="container">
        <br>
			  <div class="row">
          <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">
					  	<article class="blog_item">
        	      <div class="blog_details  bg-white"><h2><font color="black" face="century gothic">Tambah <b><i>Daftar Pemilih Tetap</i></b></font></h2>
					        <br>
                  <br>
                  <form action="processadd.php?act=insert" method="post" name="form1">
									  <div class="mt-10">
										  <input type="text" name="nama" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'"
										   required class="single-input">
								    	</div>
                    <div class="mt-10">
                      <input type="text" name="username" placeholder="Nama Pengguna" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Pengguna'"
                      required class="single-input">
                    </div>
                    <div class="mt-10">
                      <input type="password" name="password" placeholder="Kata Sandi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kata Sandi'"
                      required class="single-input">
                    </div>
                    <div class="mt-10">
                      <input type="number" name="nik" placeholder="Nomor Induk Kependudukan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Induk Kependudukan'"
                      required class="single-input">
                    </div>
									  <div class="input-group-icon mt-10">
                     <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                      <div class="form-select" id="default-select"">
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
                      </div>
                  </div>
                  <div class="mt-10">
										<textarea class="single-textarea" name="alamat" placeholder="Alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'"
										 required></textarea>
									</div>
                  <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                       <input type="submit" class="genric-btn primary radius" name="add" value="SIMPAN">
                  </div>
                </form>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a href="../../logout.php" class="genric-btn warning radius">LOGOUT</a>
              </div>
            </article>
					</div>
        </div>
				<div class="col-lg-4">
					<div class="blog_right_sidebar">
						<aside class="single_sidebar_widget post_category_widget">
              <center>
                <h4 class="widget_title"><font  color="black" face="century gothic">PENGELOLAAN</font></h4>
              </center>
						    <ul class="list cat-list">
                <li>
                  <a href="#" class="d-flex">
                    <p>Resaurant food</p>
                    <p>(37)</p>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex">
                  <p>Travel news</p>
                  <p>(10)</p>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex">
                    <p>Modern technology</p>
                    <p>(03)</p>
                    </a>
                </li>  
              </ul>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--::breadcrumb part start::-->

	<!-- footer part start-->
<footer class="copyright_part">
    <div class="container">
        <div class="row align-items-center">
            <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | MelekTech </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"> <i class="ti-twitter"></i> </a>
                <a href="#"><i class="ti-instagram"></i></a>
                <a href="#"><i class="ti-skype"></i></a>
            </div>
        </div>
    </div>
</footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="../../asset/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="../../asset/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="../../asset/js/bootstrap.min.js"></script>
    <!-- aos js -->
    <script src="../../asset/js/aos.js"></script>
    <!-- easing js -->
    <script src="../../asset/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="../../asset/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="../../asset/js/masonry.pkgd.js"></script>
    <script src="../../asset/js/jquery.nice-select.min.js"></script>
    <!-- particles js -->
    <script src="../../asset/js/owl.carousel.min.js"></script>
    <!-- carousel js -->
    <script src="../../asset/js/swiper.min.js"></script>
    <!-- custom js -->
    <script src="../../asset/js/custom.js"></script>

</body>
</html>