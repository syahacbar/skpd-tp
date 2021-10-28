<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Beranda - SKPD-TP</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/assets/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/css/templatemo-lava.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/css/owl-carousel.css') ?>">

    <!-- CSS  Tambahan-->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/css/css-tambahan-homepage.css') ?>">

    <!-- Dropzone -->
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/frontend/assets/js/jquery-2.1.0.min.js') ?>"></script>


</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            SKPD-TP
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#beranda" class="menu-item">BERANDA</a></li>
                            <li class="scroll-to-section"><a href="#tentang" class="menu-item">TENTANG</a></li>
                            <li class="scroll-to-section"><a href="#jumlahlaporan" class="menu-item">JUMLAH LAPORAN</a></li>
                            <li class="scroll-to-section"><a href="#formpengaduan" class="menu-item">FORM PENGADUAN</a></li>
                            <li class="scroll-to-section"><a href="#testimonials" class="menu-item">MASUK</a></li>`
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <?php
    if (isset($_view) && $_view)
        $this->load->view($_view);
    ?>


    <!-- ***** Footer Start ***** -->
    <footer id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2020 Layanan Pengaduan Ruas Jalan Nasional Kota Sorong - Manokwari</p>
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube-square"></i></a></li>
                            <!-- <li><a href="#"><i class="fab fa-instagram-square"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/frontend/assets/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('assets/frontend/assets/js/bootstrap.min.js') ?>"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url('assets/frontend/assets/js/owl-carousel.js') ?>"></script>
    <script src="<?php echo base_url('assets/frontend/assets/js/scrollreveal.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/frontend/assets/js/waypoints.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/frontend/assets/js/jquery.counterup.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/frontend/assets/js/imgfix.min.js') ?>"></script>

    <!-- Global Init -->
    <script src="<?php echo base_url('assets/frontend/assets/js/custom.js') ?>"></script>

</body>

</html>