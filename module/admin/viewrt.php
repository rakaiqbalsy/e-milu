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

        include_once("../../config/koneksi.php");
        
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

<!-- Content -->
<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <!-- <div class="col-lg-8 col-md-8"> -->
                                <?php
                                $query = mysqli_query($koneksi,"SELECT * from calon_rt ORDER BY id_dpt ASC");
                                while ($data = mysqli_fetch_assoc($query)) {
                                    $nama = $data['nama'];
                                    $no_urut = $data['no_urut'];
                                    $visi = $data['visi'];
                                    $misi = $data['misi'];
                                    $foto = $data['foto']; ?>

                                    <div class="col-sm-4 mb-4">
                                        <div class="card">
                                            <img src="../../asset/img/<?php echo $foto; ?>" class="card-img-top" alt="gambar">
                                        <div class="card-body">
                                            <h1 class="card-title"><?php echo $no_urut; ?></h1>
                                            <h5 class="card-text"><?php echo $nama; ?></h5>
                                            <p class="card-text"><?php echo $visi; ?></p>
                                            <p class="card-text"><?php echo $misi; ?></p>
                                        </div>

                                        </div>
                                    </div>
                                <?php } ?>
                            <!-- </div> -->
                        </div>
                    </div>
        </div>   
    </div>
</div>
    
</section>




<!-- End Content -->
<!-- footer part start-->
    <footer class="copyright_part">
        <div class="container">
            <div class="row align-items-center">
                <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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