<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
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
                        <a href="dpt/adduser.php" class="register_icon"><i class="ti-arrow-right"></i>TAMBAH DPT</a>
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
                                        <a class="nav-link active" href="halaman_admin.php">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Calon
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="viewrw.php">RW</a>
                                            <a class="dropdown-item" href="viewrt.php">RT</a>
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
        include_once("../../config/koneksi.php");

    ?>
            <center>
                <h1> PEROLEHAN HASIL RW 08</h1>
            </center>
            <div style="width: 800px;margin: 0px auto;">
                <canvas id="myChart"></canvas>
            </div>
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

<!-- Chart JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
<!-- popper js -->
<script src="../../../asset/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="../../../asset/js/bootstrap.min.js"></script>
<!-- aos js -->
<script src="../../../asset/js/aos.js"></script>
<!-- easing js -->
<script src="../../../asset/js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="../../../asset/../../asset/js/swiper.min.js"></script>
<!-- swiper js -->
<script src="../../../asset/js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="../../../asset/js/owl.carousel.min.js"></script>
<!-- carousel js -->
<script src="../../../asset/js/swiper.min.js"></script>
<!-- custom js -->
<script src="../../../asset/js/custom.js"></script>

<script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Paslon 1", "Paslon 2"],
                datasets: [{
                    label: '',
                    data: [
                    <?php 
                    $jumlah_no_urut1 = mysqli_query($koneksi,"select * from pilihan_rw where no_urut='1'");
                    echo mysqli_num_rows($jumlah_no_urut1);
                    ?>, 
                    <?php 
                    $jumlah_no_urut2 = mysqli_query($koneksi,"select * from pilihan_rw where no_urut='2'");
                    echo mysqli_num_rows($jumlah_no_urut2);
                    ?> 
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>