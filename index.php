<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Voting | Login</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="asset/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="asset/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="asset/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="asset/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="asset/css/swiper.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>

    <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class=notice bg=primary>
        <a href=index.php class=close>close</a>
        <p class=warn>Username dan Password tidak sesuai !	</p>
        </div>";
            }	
        }
    ?>

    <!--::header part start::-->
    <header class="header_area">
        <div class="sub_header">
            <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-4 col-xl-6">
                      <div id="logo">
                          <a href="index.html"><img src="asset/img/banner-kpu.png" alt="" height="80" title="" /></a>
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
        
    </header>

	<!-- Header part end-->

	<section class="breadcrumbid breadcrumb_bg"> 
		<div class="container">
            <br>
            <br>
            <br>
			<div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <center>
                        <div class="col-lg-4">
				        	<div class="blog_right_sidebar">
						        <aside class="single_sidebar_widget post_category_widget">
							        <h4 class="widget_title">L O G I N</h4>
                                    <form class="login-form" action="cek_login.php" method="post">
                                        <table>
                                            <tr>
                                                <td>
                                                    <div class="card">
                                                        <input type="text" name="username" placeholder="Nama Pengguna"
                                                        required class="single-input">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="card">
                                                        <input type="password" name="password" placeholder="Kata Sandi"
                                                        required class="single-input">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td align="center"><input type="submit" class="genric-btn primary radius" value="MASUK"></td>
                                            </tr>
                                        </table>
                                    </form>
                                    <br>
                                    <br>
						        </aside>
					        </div>
                        </div>
                    </center>
                </div>
            </div>
            <br>
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
<script src="asset/js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="asset/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="asset/js/bootstrap.min.js"></script>
<!-- aos js -->
<script src="asset/js/aos.js"></script>
<!-- easing js -->
<script src="asset/js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="asset/js/swiper.min.js"></script>
<!-- swiper js -->
<script src="asset/js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="asset/js/owl.carousel.min.js"></script>
<!-- carousel js -->
<script src="asset/js/swiper.min.js"></script>
<!-- custom js -->
<script src="asset/js/custom.js"></script>

</body>
</html>