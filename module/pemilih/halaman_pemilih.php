<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Voting | Pemilih</title>
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
                                        <a class="nav-link active" href="halaman_pemilih.php">Beranda</a>
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

	<section class="breadcrumbpi breadcrumb_bg">
		<div class="container">
			<br>
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="blog_left_sidebar">
						<article class="blog_item">
							<div class="blog_details  bg-white">
                            	<h2><font  color="black" face="century gothic"><i>Selamat datang</i> <b><?php echo $_SESSION['nik']; ?></font></b></h2>
                            	<p>E-Voting atau <i>Electronic Voting</i> merupakan aplikasi karya anak bangsa yang dimanfaatkan untuk Pemilihan Umum Serentak Tahun 2019</p>
                           		<p>Halo Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<a href="../../logout.php" class="genric-btn primary radius">KELUAR</a>
						  	</div>
						</article>
					</div>
                </div>
				<div class="col-lg-4">
					<div class="blog_right_sidebar">
						<aside class="single_sidebar_widget post_category_widget">
							<center>	
								<h4 class="widget_title"><font  color="black" face="century gothic">SURAT SUARA PEMILIHAN</font></h4>
								<table>
									<tr>
										<td>
											<div class="card">
												<a href="verifikasi_rw.php" class="genric-btn danger radius"><h2><font  color="white" face="century gothic">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; R W &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></h2></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>
											<div class="card">
								    			<a  href="verifikasi_rt.php" class="genric-btn success sradius"><h2><font color="white" face="century gothic">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; R T &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></h2></a>
											</div>
										</td>
									</tr>
								</table>
							</center>
							<br>		
							<table>
								<tr>
									<td colspan="2"><i><font size="1">Perhatian :</font></i></td>
								</tr>
								<tr>
									<td><i><font size="1">1. </font></i></td>
									<td><i><font size="1">Pemilihan harus dilakukan dengan jujur dan adil.</font></i></td>
								</tr>
								<tr>
									<td><i><font size="1">2. </td>
									<td><i><font size="1">Pemilihan hanya bisa dilakukan satu kali.</font></i></td>
								</tr>
								<tr>
									<td><i><font size="1">3. </td>
									<td><i><font size="1">Segala kecurangan akan ditindak sesuai undang-undang.</font></i></td>
								</tr>
							</table>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</section>
    
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
<script src="../../../asset/js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="../../../asset/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="../../../asset/js/bootstrap.min.js"></script>
<!-- aos js -->
<script src="../../../asset/js/aos.js"></script>
<!-- easing js -->
<script src="../../../asset/js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="../../../asset/js/swiper.min.js"></script>
<!-- swiper js -->
<script src="../../../asset/js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="../../../asset/js/owl.carousel.min.js"></script>
<!-- carousel js -->
<script src="../../../asset/js/swiper.min.js"></script>
<!-- custom js -->
<script src="../../../asset/js/custom.js"></script>

</body>
</html>