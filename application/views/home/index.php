<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Portal KUA Kecamatan Sukakarya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url("assets/"); ?> img/favicon.png" rel="icon">
  <link href="<?= base_url("assets/"); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url("assets/"); ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url("assets/"); ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url("assets/"); ?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url("assets/"); ?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url("assets/"); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url("assets/"); ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url("assets/"); ?>css/style.css" rel="stylesheet">

  <style>

    .coverBg{
      background-image: url(pic/bannerblacknew.jpg);
      background-repeat: no-repeat;
      position: fixed;
      width: 100%;
      height: 100%;
      background-size: 100%;
    }

    .wrapper{
      width: 900px;
      margin: auto;
      background-color: #DCE0E6;
      position: relative;
    }

  </style>

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!-- Banner -->
  <img src="<?= base_url("assets/"); ?>pic/KUA.png" style="width:1800px;height:170px;" class="img-fluid">

  <header id="header">

    <div class="container-fluid">
      <!--
      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Kecamatan Babakan Ciparay</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/home.png" alt="" title="" /></a>
      </div>
      -->
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.html">Home</a></li>
          <li class="menu-has-children"><a href="#">Profil</a>
            <ul>
              <li><a href="">Sejarah</a>
                <ul>
                 <li><a href="<?= base_url("Profil/sejarah/"); ?>">Latar Belakang</a></li>
                 <li><a href="<?= base_url("Profil/dasarhukum"); ?>">Dasar Hukum</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url("Profil/kepalaKUA/"); ?>">Profil Kepala KUA</a></li>
              <li><a href="<?= base_url("Profil/letakgeo/"); ?>">Letak Geografis</a></li>
              <li><a href="<?= base_url("Profil/visimisi/"); ?>">Visi & Misi </a></li>
              <li><a href="<?= base_url("Profil/struktur/"); ?>">Struktur Organisasi</a></li>
              <li><a href="<?= base_url("Profil/tugaskua/"); ?>">Tugas & Tujuan KUA</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="#">Data</a>
            <ul>
              <li><a href="<?= base_url("Data/penyuluh"); ?>">Data Penyuluh Agama</a></li>
              <li><a href="<?= base_url("Data/masjid"); ?>">Data Tempat Ibadah</a></li>
              <li><a href="">Data Tanah Wakaf </a>
                <ul>
                 <li><a href="<?= base_url("Data/pelayanan"); ?>">Pelayanan Wakaf</a></li>
                 <li><a href="<?= base_url("Data/jumlahwakaf"); ?>">Jumlah Tanah Wakaf</a></li>
                </ul>
             </li>
            </ul> 
          </li>

          <li class="menu-has-children"><a href="#" id="#programkerja">Program Kerja</a>
            <ul>
                <li><a href="<?= base_url("Program_kerja/hisab_ruyah");?>">Bimbingan Kemasjidan</a></li>
                <li><a href="<?= base_url("Program_kerja/keluarga_sakinah");?>">Keluarga Sakinah</a></li>
                <li><a href="<?= base_url("Program_kerja/ibadah_haji"); ?>">Pelayanan Ibadah Haji</a></li>
                <li><a href="<?= base_url("Program_kerja/nikah");?>">Pelayanan Nikah</a></li>
                <li><a href="<?= base_url("Program_kerja/wakaf"); ?>">Pelayanan Wakaf</a></li>
            </ul>
          </li>
          <li><a href="#skills">Statistik</a></li>
          <li><a href="#portfolio">Berita</a><li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="<?= base_url("Login/"); ?>">Login</a></li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->

  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators">
        </ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?= base_url("assets/"); ?>img/intro-carousel/kantor.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="text-light">Profil KUA Kecamatan Sukakarya</h2>
                <p>Kantor Urusan Agama yang kewenangannya membantu pemerintahan khususnya dibidang keagamaan, dan salah satu unit kerja departemen Agama terdepan serta menjadi ujung tombak pelaksanaan tugas pelayanan masyarakat</p>
                <a href="<?= base_url("Profil/sejarah/"); ?>" class="btn-get-started scrollto">Lihat</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?= base_url("assets/"); ?>img/intro-carousel/nikah.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Hayuk Nikah</h2>
                <p>Pernikahan adalah upacara pengikatan janji nikah yang dirayakan atau dilaksanakan oleh dua orang dengan maksud meresmikan ikatan perkawinan secara norma agama, norma hukum, dan norma sosial</p>
                <a href="#" class="btn-get-started scrollto">Lihat</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?= base_url("assets/"); ?>img/intro-carousel/penyuluh.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>OPTIMA 2.0</h2>
                <p>Setelah melalui proses pendaftaran, test seleksi, dan pemberkasan, akhirnya 97 penyuluh Agama
                  Islam Non PNS dapat bernafas lega khususnya untuk penyuluh Agama Islam di Kantor Urusan Agama
                  Sukakarya karena dinyatakan berhasil lolos sebagai Penyuluh Agama Islam Non PNS Periode 2017-
                  2019.</p>
                <a href="#" class="btn-get-started scrollto">Lihat</a>
              </div>
            </div>
          </div>
    </div>
    </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">
          <?php
          $i=1;
          foreach($data as $row)
          {

           echo'<div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="'.base_url("Home/berita/").''.$row->kode_berita.'"">'.$row->nomor.'</a></h4>
            <p class="description">'.$row->title.'</p>
          </div>';

            $i++;
          }
          ?>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Tentang Kami</h3>
          <p>Kecamatan Sukakarya merupakan salah satu kecamatan yang berada di wilayah Pemerintahan Daerah Kabupaten Bekasi, di dalamnya terdapat Kantor Urusan Agama (KUA) yang kewenangannya membantu tugas pemerintahan khususnya di bidang keagamaan, dan salah satu unit kerja Departemen Agama yang berada paling depan serta menjadi ujung tombak dalam pelaksanaan tugas-tugas pelayanan kepada masyarakat dalam membangun di bidang keagamaan
          <br><br>
          KUA Kecamatan Sukakarya KUA kec Sukakarya merupakan salah satu dan 23 KUA Kecamatan di lingkungan Kantor Kementerian Agama Kabupaten Bekasi KUA Sukakarya berdiri berdasarkan buku register pencatatan peda tahun 2004 dipimpin oleh kepala KUA pertama bernama Drs. H. Bunyamin. KUA Kecamatan Sukakarya dibengun di atas tanah kecamatan yang luasnyn 300 M2 dari uas keseluruhan 1.750 M2. yang diperuntukkan untuk komplek perkantoran kecamatan Sukakarya Kabupaten Bekasi</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-clipboard"></i></div>
              </div>
              <h2 class="title"><a href="<?= base_url("Profil/struktur/");?>">Struktur Ogranisasi</a></h2>
              <p>
                Berikut susunan struktur Organisasi di dalam KUA Kecamatan Sukakarya
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="<?= base_url("Program_kerja/hisab_ruyah");?>">Program Kerja</a></h2>
              <p>
                KUA Sukakarya Kabupaten Bekasi tidak hanya sekedar menindaklanjuti program pemerintah, kami juga melayani....
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="<?= base_url("Profil/visimisi/"); ?>">Visi dan Misi</a></h2>
              <p>
                Visi KUA Sukakarya mengikuti Visi dari Kementerian Agama Republik Indonesia untuk menyelaraskan pikiran, yaitu Terwujudnya....
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Data</h3>
          <p>Menu Data untuk publikasi dan sosialisasi kepada masyarakat mengenai tata cara pesuratan, pelayanan pernikahan, atau segala hal keagamaan </p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="penyuluhagama.html">Data Penyuluh Agama</a></h4>
            <p class="description">Penyuluh Agama adalah seorang yang diberi tugas, tanggungjawab dan wewenang oleh Pemerintah untuk melaksanakan bimbingan keagamaan, penyuluhan pembangunan melalui bahasa agama kepada kelompok sasaran</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-moon-outline"></i></div>
            <h4 class="title"><a href="masjid.html">Data Masjid</a></h4>
            <p class="description">dalah rumah tempat ibadah umat Islam atau Muslim. Data ini berguna untuk mengetahui lokasi dan identitas Masjid yang dibangun</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="penduduk.html">Data Penduduk</a></h4>
            <p class="description">Data kependudukan beragama dapat dilihat dalam menu ini berdasarkan kategori pengelompokan agama</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-lightbulb-outline"></i></div>
            <h4 class="title"><a href="jumlahwakaf.html">Data Tanah Wakaf</a></h4>
            <p class="description">Untuk mengetahui Jumlah tanah wakaf bersetifikat silahkan klik bagian ini</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Sidang Peradilan Agama</a></h4>
            <p class="description">Silahkan klik bagian ini untuk mendapatkan formulir Pemintaan Akta Cerai</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="datanikah.html">Data Pernikahan</a></h4>
            <p class="description">memiliki bukti hukum berupa surat nikah, surat nikah ini bisa digunakan untuk mempermudah berbagai urusan birokrasi</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Butuh Pelayanan ?? </h3>
        <p> Silahkan klik tombol dibawah ini untuk mendapatkan pelayanan</p>
        <a class="cta-btn" href="#contact">Hubungi Kami</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Data Statistik</h3>
          <p>Data yang tercantum merupakan pengumpulan data berdasarkan data tahunan</p>
        </header>

        <div class="skills-content">
          <?php
          $i=1;
          foreach($data2 as $row)
          {

           echo '<div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Total RT<i class="val">'.$row->total_rt.'</i></span>
            </div>
          </div>';
          echo '<div class="progress">
            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Total RW<i class="val">'.$row->total_rw.'</i></span>
            </div>
          </div>';
          echo '<div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Total Penduduk<i class="val">'.$row->total_penduduk.'</i></span>
            </div>
          </div>';
          echo '<div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Total Tempat Ibadah<i class="val">'.$row->total_tmptibadah.'</i></span>
            </div>
          </div>';
          echo '<div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Total Sarana Pendidikan<i class="val">'.$row->total_pendidikan.'</i></span>
            </div>
          </div>';

            $i++;
          }
          ?>

      </div>
    </section>

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">kegiatan</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-web">2020</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <?php
          $i=1;
          foreach($data as $row)
          {

           echo '<div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">';
           echo'
              <figure>
                <img src="'.base_url("foto/").''.$row->foto.'" class="img-fluid" width="400" height="200">';
           echo '<a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="'.base_url("Home/berita/").''.$row->kode_berita.'">'.$row->nomor.'</a></h4>
                <p>'.$row->title.'</p>
              </div>
            </div>
          </div>';

            $i++;
          }
          ?>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Hubungi Kami</h3>
          <p>Silahkan hubungi kami jika Anda memerlukan pelayanan. Kami akan melayani Anda dengan senang</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Alamat</h3>
              <address>Jl. Raya Sukakarya Kp. Gamprit Desa Sukalaksana Kec. Sukakarya Kab, Bekasi</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telepon</h3>
              <p><a href="tel:+155895548855">(022) 6015723</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="https://mail.google.com/mail/u/0/#inbox">KUAsukakarya@gmail.com</a></p>
            </div>
          </div>
        </div>

          <div class="social-links text-center">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://m.facebook.com/KUA-SUKAKARYA-BEKASI-106900529341417/?ref=page_internal&mt_nav=0&locale2=id_ID" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com" class="instagram"><i class="fa fa-instagram"></i></a>
          </div>
    </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">   
    <div class="container">
      <div class="copyright">
        &copy; Copyright 2020 <strong>KUA Kecamatan Sukakarya</strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?= base_url("assets/"); ?>lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url("assets/"); ?>lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url("assets/"); ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url("assets/"); ?>lib/easing/easing.min.js"></script>
  <script src="<?= base_url("assets/"); ?>lib/superfish/hoverIntent.js"></script>
  <script src="<?= base_url("assets/"); ?>lib/superfish/superfish.min.js"></script>
  <script src="<?= base_url("assets/"); ?>lib/wow/wow.min.js"></script>
  <script src="<?= base_url("assets/"); ?>lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url("assets/"); ?>lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url("assets/"); ?>lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url("assets/"); ?>lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url("assets/"); ?>lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?= base_url("assets/"); ?>lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url("assets/"); ?>contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url("assets/"); ?>js/main.js"></script>

</body>
</html>
