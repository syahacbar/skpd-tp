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
    <script src='https://www.google.com/recaptcha/api.js?hl=id'></script>

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

 <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'><!-- 
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script> -->
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

                            <?php if (!$this->ion_auth->logged_in()) { ?>
                            <li>
                                <a class="" href="<?php echo base_url('auth/login')  ?>">LOGIN</a>
                            </li>
                            <?php }  ?>

                            <?php if ($this->ion_auth->logged_in()) { ?>
                            <li>
                                <a class="" href="<?php echo base_url('auth/logout')  ?>">LOGOUT</a>
                            </li>
                            <?php }  ?>
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



    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="beranda">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>SKPD - <em>TP</em></h1>
                        <p>Layanan Pengaduan Ruas Jalan Nasional Kota Sorong - Manokwari. Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata
                            letak
                        </p>
                        <a href="#formpengaduan" class="main-button-slider">Buat Laporan</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="tentang">
        <div class="container">
            <div class="row mb-4">
                <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
                    <h1>About Us</h1>
                </div>
            </div>
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="<?php echo base_url('assets/frontend/assets/images/left-image.png') ?>" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="<?php echo base_url('assets/frontend/assets/images/about-icon-01.png') ?>" alt="">
                            <div class="text">
                                <h4>Visi Binamarga</h4>
                                <p>Please do not redistribute this template ZIP file for a download purpose. You may <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> us for additional licensing of our template or to get a
                                    PSD file.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="<?php echo base_url('assets/frontend/assets/images/about-icon-02.png') ?>" alt="">
                            <div class="text">
                                <h4>Misi Binamarga</h4>
                                <p>You can <a rel="nofollow" href="https://templatemo.com/tm-540-lava-landing-page">download Lava
                                        Template</a> from our website. Duis viverra, ipsum et scelerisque placerat, orci magna consequat ligula.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="<?php echo base_url('assets/frontend/assets/images/about-icon-03.png') ?>" alt="">
                            <div class="text">
                                <h4>Tujuan Binamarga</h4>
                                <p>Phasellus in imperdiet felis, eget vestibulum nulla. Aliquam nec dui nec augue maximus porta. Curabitur tristique lacus.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="jumlahlaporan">
        <div class="container">
            <div class="row mb-4">
                <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
                    <h1>Jumlah Laporan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <!-- <h2>01</h2> -->
                            <!-- <i class="fas fa-road iconjalan"></i> -->
                            <img src="<?php echo base_url('assets/frontend/assets/images/jalan.png') ?>" alt="">
                            <h4>Jalan</h4>
                            <p>Jumlah laporan pengaduan yang masuk terkait jalan hingga saat ini berjumlah <em>50</em> laporan.</p>
                            <a href="#testimonials" class="main-button">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <!-- <h2>02</h2> -->
                            <!-- <i class="fas fa-grip-lines icondrainase"></i> -->
                            <img src="<?php echo base_url('assets/frontend/assets/images/drainase.png') ?>" alt="">
                            <h4>Drainase</h4>
                            <p>Jumlah laporan pengaduan yang masuk terkait drainase hingga saat ini berjumlah <em>100</em> laporan.</p>
                            <a href="#testimonials" class="main-button">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <!-- <h2>03</h2> -->
                            <!-- <i class="fas fa-archway iconjembatan"></i> -->
                            <img src="<?php echo base_url('assets/frontend/assets/images/jembatan.png') ?>" alt="">
                            <h4>Jembatan</h4>
                            <p>Jumlah laporan pengaduan yang masuk terkait jembatan hingga saat ini berjumlah <em>20</em> laporan.</p>
                            <a href="#testimonials" class="main-button">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->
    <div class="left-image-decor"></div>

    <section id="formpengaduan">
        <div class="container container-formLapor ">
            <div class="row">
                <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4 formLapor">
                    <h1>Form Pengaduan</h1>
                </div>
            </div>
            <div class="row mb-4 header-formlap">
                <div class="left-text col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <h4>Data Pelapor</h4>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>Lengkapi data-data di bawah ini. Semua bidang bersifat wajib.</p>
                </div>
            </div>

            <div class="row formlap">
                <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
                    <form id="formlapor" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik" requireda>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_pelapor" id="nama_pelapor" requireda>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat Tinggal</label>
                                <textarea type="text" class="form-control" rows="8" name="alamat_pelapor" id="alamat_pelapor" placeholder="Format nama jalan: Nama jalan, No. Rumah, RT/RW, dan nama kompleks." requireda></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Kabupaten/Kota</label>
                                        <select class="custom-select" name="kab_pelapor" id="kab_pelapor" requireda>
                                            <option value=""><i class="fas fa-chevron-down"></i>- Pilih Kabupaten/Kota -</option>
                                            <?php
                                            foreach ($wil_kab as $kab) {
                                                echo '<option value="' . $kab->kode . '">' . $kab->nama . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Kecamatan/Distrik</label>
                                        <select class="custom-select" name="kec_pelapor" id="kec_pelapor" requireda>
                                            <option value="">Pilih</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Kelurahan/Desa</label>
                                        <select class="custom-select" name="des_pelapor" id="des_pelapor" requireda>
                                            <option value="">Pilih</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat Email</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" requireda>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor WhatsApp</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" requireda>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Unggah KTP</label>
                               <div class="alert alert-warning alert-dismissible fade show peringatan" role="alert">
                                    <strong>Tips!</strong> Silakan unggah foto KTP Anda. Foto harus jelas!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div id="ktp" class="dropzone ktp">
                                    <div class="dz-message">Klik atau drop foto KTP ke sini</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="text-left col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2 mt-4">
                            <h4 class="mb-2">Data Laporan</h4>
                            <p>Silakan isi bidang-bidang berikut ini untuk melengkapi data laporan Anda.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <label>Lokasi</label>
                                <div class="alert alert-warning alert-dismissible fade show peringatan" role="alert">
                                    <strong>Tips!</strong> Geser pin maps di bawah ini untuk mengambil koordinat lokasi secara otomatis.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" class="form-control" name="latitude" id="latitude" requireda>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Longitude</label>
                                <input type="text" class="form-control" name="longitude" id="longitude" requireda>
                            </div>
                        </div>
                    </div>

                    <div class="row jenisinfra mb-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group mb-0">
                                <label>Jenis Infrastruktur</label>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="infrastruktur" id="jalan" value="option1" requireda>
                                <label class="form-check-label" for="jalan">Jalan</label>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="infrastruktur" id="drainase" value="option2" requireda>
                                <label class="form-check-label" for="drainase">Drainase</label>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="infrastruktur" id="jembatan" value="option3" requireda>
                                <label class="form-check-label" for="jembatan">Jembatan</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Ruas Jalan</label>
                                <textarea type="text" class="form-control" rows="5" name="nama_ruasjalan" id="nama_ruasjalan" requireda></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Kabupaten/Kota</label>
                                        <select class="custom-select" name="lokasi_kabkota" id="lokasi_kabkota" requireda>
                                            <option value=""><i class="fas fa-chevron-down"></i>- Pilih Kabupaten/Kota -</option>
                                            <?php
                                            foreach ($wil_kab as $kab) {
                                                echo '<option value="' . $kab->kode . '">' . $kab->nama . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>    


                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Kecamatan/Distrik</label>
                                        <select class="custom-select" name="lokasi_distrik" id="lokasi_distrik" requireda>
                                            <option value="">- Pilih Kecamatan/Distrik -</option>
                                        </select>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Isi Laporan</label>
                                <textarea type="text" class="form-control" rows="6" name="isi_laporan" id="isi_laporan" requireda></textarea>
                            </div>
                        </div>
                    </div>


                    <div id="buktiLaporan" class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Bukti Laporan</label>
                                <div class="alert alert-warning alert-dismissible fade show peringatan" role="alert">
                                    <strong>Tips!</strong> Silakan unggah bukti laporan Anda. Klik ikon tanda tanya untuk melihat bantuan.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <!-- <label>Foto 1</label> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBantuan">
                                <i class="bi bi-info-square-fill"></i>
                            </button>
                                <div id="dokumentasi" class="dropzone dokumentasi dokumentasi1" requireda>
                                    <div class="dz-message">Klik atau drop foto ke sini</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <!-- <label>Foto 2</label> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBantuan1">
                                <i class="bi bi-info-square-fill"></i>
                            </button>
                                <div id="dokumentasi" class="dropzone dokumentasi dokumentasi2" requireda>
                                    <div class="dz-message">Klik atau drop foto ke sini</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <!-- <label>Foto 3</label> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBantuan2">
                                <i class="bi bi-info-square-fill"></i>
                            </button>
                                <div id="dokumentasi" class="dropzone dokumentasi dokumentasi3" requireda>
                                    <div class="dz-message">Klik atau drop foto ke sini</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <center><?php echo $recaptcha; ?></center>
                            </div>
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Kebijakan Layanan</label>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input id="chk1" type="checkbox" name="chk" class="custom-control-input">
                                    <label for="chk1" class="custom-control-label text-small">Dengan ini saya menyatakan bahwa data yang saya isikan adalah data yang sebenarnya. Jika di kemudian hari ternyata data yang saya isikan terbukti tidak benar maka laporan saya dapat dibatalkan.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="kodelaporan" id="kodelaporan" value="<?php echo $kodelaporan; ?>">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary kirimLaporan">Kirim Laporan</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <!-- </form> -->
            </div>
        </div>
        <div id="loader"></div>
        </div>
    </section>


    <div class="right-image-decor"></div>


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




    <!-- Modal Bantuan 1 -->
    <div class="modal fade" id="modalBantuan" tabindex="-1" role="dialog" aria-labelledby="modalBantuanLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalBantuanLabel">Info!</h5>
                    <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                </div>
                <div class="modal-body">
                    Untuk gambar pertama, fokus foto ke bagian jalan, drainase, atau jembatan yang rusak. Lihat gambar di bawah ini sebagai contoh.
                    <div id="gambar1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/drainase-rusak.jpg') ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/jalan-rusak.jpg') ?>" alt="Second slide">
                            </div>

                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/jembatan-rusak.jpg') ?>" alt="Second slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#gambar1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#gambar1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Bantuan -->

    <!-- Modal Bantuan 2 -->
    <div class="modal fade" id="modalBantuan1" tabindex="-1" role="dialog" aria-labelledby="modalBantuan1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalBantuan1Label">Info!</h5>
                    <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                </div>
                <div class="modal-body">
                    Untuk gambar kedua, foto seluruh badan jalan atau drainase seperti gambar di bawah ini.
                    <div id="gambar2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/jembatan-rusak.jpg') ?>" alt="tampak samping jalan">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/drainase-rusak.jpg') ?>" alt="tampak samping darainase">
                            </div>

                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/jalan-rusak.jpg') ?>" alt="tampak samping darainase">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#gambar2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#gambar2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Bantuan -->

    <!-- Modal Bantuan 3 -->
    <div class="modal fade" id="modalBantuan2" tabindex="-1" role="dialog" aria-labelledby="modalBantuan2Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalBantuan2Label">Info!</h5>
                    <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                </div>
                <div class="modal-body">
                    Silakan buat pose selfi dengan membelakangi jalan rusak.
                    <img src="<?php echo base_url('assets/frontend/assets/images/jalan-rusak.jpg') ?>" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Bantuan -->


    <!-- Modal Login Anggota-->
    <div class="modal fade" id="loginAdmin" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <?php echo form_open("auth/login"); ?>
                    <a class="navbar-brand" href="#">
                        <img src="#" alt="">
                    </a>
                    <h2 class="display-4 text-center lh-1 mb-4">Login</h2>
                    <div class="mb-3">
                        <label for="identity" class="form-label">Username</label>
                        <input name="identity" type="text" class="form-control" id="identity" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <?php echo $recaptcha2; ?>
                    </div>

                    <button type="submit" class="btn btn-primary">MASUK</button>
                    <?php echo form_close(); ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Login Anggota-->

    <!-- Modal Detail Laporan-->
    <div class="modal fade" id="report-detail" tabindex="-1" role="dialog" aria-labelledby="report-detailTitle" aria-hidden="true">
        <div id="newreport" class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="modal-header">
                    <h5 class="modal-title" id="report-detailTitle"><span id="slokasi_namajalant"></span></h5>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img id="sdokumentasi1" src="" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img id="sdokumentasi2" src="" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <div class="card-body">
                        <p class="card-text"><span id="spengaduan"></span></p>
                        <p class="card-text"><small class="text-muted">Lokasi Ruas Jalan: </small><span id="slokasi_namajalan"></span></p>
                        <p class="card-text"><small class="text-muted">Kecamatan/Distrik: </small><span id="slokasi_distrik"></span></p>
                        <p class="card-text"><small class="text-muted">Kabupaten/Kota: </small><span id="slokasi_kabkota"></span></p>
                        <p class="card-text"><small class="text-muted">Koordinat Lokasi: </small><span id="slokasi_koordinat"></span></p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

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

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <script>
    Dropzone.autoDiscover = false;
    $(document).ready(function() {
        $("#kab_pelapor").change(function() {
            var url = "<?php echo site_url('lapor/add_ajax_kec'); ?>/" + $(this).val();
            $('#kec_pelapor').load(url);
            return false;
        });

        $("#kec_pelapor").change(function() {
            var url = "<?php echo site_url('lapor/add_ajax_des'); ?>/" + $(this).val();
            $('#des_pelapor').load(url);
            return false;
        });

        $("#lokasi_kabkota").change(function() {
            var url = "<?php echo site_url('lapor/add_ajax_kec'); ?>/" + $(this).val();
            $('#lokasi_distrik').load(url);
            return false;
        });

        var ktp_upload = new Dropzone(".ktp", {
            autoProcessQueue: true,
            url: "<?php echo site_url('lapor/uploadktp') ?>",
            maxFilesize: 50,
            maxFiles: 1,
            method: "post",
            acceptedFiles: "image/*",
            paramName: "filektp",
            dictInvalidFileType: "Type file ini tidak dizinkan",
            addRemoveLinks: true,
        });

        ktp_upload.on("sending", function(a, b, c) {
            a.token = Math.random();
            c.append("token_foto", a.token); //Menmpersiapkan token untuk masing masing foto
            c.append("kodelaporan", $('#kodelaporan').val());
        });


        $('#formlapor').submit(function(e) {
            e.preventDefault();
            var kodelaporan = $("input[name='kodelaporan']").val();
            var nama_pelapor = $("input[name='nama_pelapor']").val();
            var nik = $("input[name='nik']").val();
            var alamat_pelapor = $("textarea[name='alamat_pelapor']").val();
            var kab_pelapor = $("select[name='kab_pelapor']").val();
            var kec_pelapor = $("select[name='kec_pelapor']").val();
            var des_pelapor = $("select[name='des_pelapor']").val();
            var no_hp = $("input[name='no_hp']").val();
            var email = $("input[name='email']").val();
            var isi_laporan = $("textarea[name='isi_laporan']").val();
            var infrastruktur = $("input[name='infrastruktur']").val();
            var nama_ruasjalan = $("textarea[name='nama_ruasjalan']").val();
            var lokasi_kabkota = $("select[name='lokasi_kabkota']").val();
            var lokasi_distrik = $("select[name='lokasi_distrik']").val();
            var latitude = $("input[name='latitude']").val();
            var longitude = $("input[name='longitude']").val();

            $.ajax({
                url: "<?php echo site_url('lapor/savelaporan') ?>",
                type: "POST",
                data: {
                    kodelaporan: kodelaporan,
                    nama_pelapor: nama_pelapor,
                    nik: nik,
                    alamat_pelapor: alamat_pelapor,
                    kab_pelapor: kab_pelapor,
                    kec_pelapor: kec_pelapor,
                    des_pelapor: des_pelapor,
                    no_hp: no_hp,
                    email: email,
                    isi_laporan: isi_laporan,
                    infrastruktur: infrastruktur,
                    nama_ruasjalan: nama_ruasjalan,
                    lokasi_kabkota: lokasi_kabkota,
                    lokasi_distrik: lokasi_distrik,
                    latitude: latitude,
                    longitude: longitude,
                    'g-recaptcha-response': grecaptcha.getResponse()
                },
                error: function() {
                    console.log('Tidak berhasil simpan data');
                },
                success: function(data) {
                    var objData = jQuery.parseJSON(data);

                    if(objData.status) {
                        console.log('Simpan berhasil');
                        location.reload();
                    } else {
                        console.log('Gagal simpan');
                    }
                }
            });

        });
    });
    </script>

</body>

</html>