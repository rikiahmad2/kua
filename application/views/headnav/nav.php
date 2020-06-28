<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
      
        <!-- Favicons -->
        <link href="<?= base_url("assets/"); ?>img/favicon.png">
        <link href="<?= base_url("assets/"); ?>img/apple-touch-icon.png">
      
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

    </head>

    <body  style="background-color:powderblue;">

          <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="<?= base_url("Home/"); ?>">Home</a></li>
          <li class="menu-has-children"><a href="#">Profil</a>
            <ul>
              <li><a href="<?= base_url("Profil/kepalaKUA"); ?>">Profil Kepala KUA</a></li>
              <li><a href="<?= base_url("Profil/letakgeo"); ?>">Letak Geografis</a></li>
              <li><a href="<?= base_url("Profil/visimisi"); ?>">Visi & Misi </a></li>
              <li><a href="<?= base_url("Profil/struktur"); ?>">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="#">Data</a>
            <ul>
              <li><a href="<?= base_url("Data/penyuluh"); ?>">Data Penyuluh Agama</a></li>
              <li><a href="<?= base_url("Data/masjid"); ?>">Data Tempat Ibadah</a></li>
            </ul> 
          </li>

          <li class="menu-has-children"><a href="#">Program Kerja</a>
            <ul>
                <li><a href="<?= base_url("Program_kerja/hisab_ruyah");?>">Kemasjidan Dan Hisab Ru'yah</a></li>
                <li><a href="<?= base_url("Program_kerja/keluarga_sakinah");?>">Keluarga Sakinah</a>
                <li><a href="<?= base_url("Program_kerja/ibadah_haji"); ?>">Ibadah Haji</a></li>
                </li>
            </ul>
          </li>
          <li><a href="<?= base_url("Home/#skills"); ?>">Statistik</a></li>
          <li><a href="<?= base_url("Home/#portfolio"); ?>">Berita</a><li>
          <li><a href="<?= base_url("Home/#contact"); ?>">Contact</a></li>

        </ul>
      </nav><!-- #nav-menu-container -->

<section id="call-to-action" class="wow fadeIn">
  <div class="container text-center">
    <header class="section-header">
      <h3><?=$header ?></h3>
    </header>
  </div>
</section>

</body>   
</html>