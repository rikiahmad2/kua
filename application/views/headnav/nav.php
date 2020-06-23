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
          <li><a href="index.html">Home</a></li>
          <li class="menu-has-children"><a href="#">Profil</a>
            <ul>
              <li><a href="KepalaKUA.html">Profil Kepala KUA</a></li>
              <li><a href="Geografis.html">Letak Geografis</a></li>
              <li><a href="visimisi.html">Visi & Misi </a></li>
              <li><a href="TugasKUA.html">Tugas dan Fungsi KUA </a></li>
              <li><a href="struktur_organisasi.html">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="#">Data</a>
            <ul>
              <li><a href="penyuluhagama.html">Data Penyuluh Agama</a></li>
              <li><a href="masjid.html">Data Masjid</a></li>
              <li><a href="penduduk.html">Data Penduduk Beragama</a></li>
             <li><a href="">Data Tanah Wakaf </a>
                <ul>
                 <li><a href="pelayananwakaf.html">Pelayanan Wakaf</a></li>
                 <li><a href="jumlahwakaf.html">Jumlah Tanah Wakaf</a></li>
                </ul>
             </li>
             <li><a href="">Data Pernikahan</a>
               <ul>
                 <li><a href="jadwalnikah.html">Jadwal Pernikahan</a></li>
                 <li><a href="datanikah.html">Data Pernikahan</a></li>
              </ul>
             </li>
             <li ><a href="">Sidang Peradilan Agama</a>
                <ul>
                  <li><a href="jadwalsidang.html">Jadwal Sidang Peradilan Agama</a></li>
                  <li><a href="#">Formulir Permintaan Akta Cerai</a></li>
                  <li><a href="#">Cek Info Perkara</a></li>
                 </ul>
             </li>
            </ul> 
          </li>

          <li class="menu-has-children"><a href="#">Program Kerja</a>
            <ul>
                <li><a href="nikah.html">Pelayanan Nikah</a></li>
                <li><a href="pelayananwakaf.html">Pelayanan Wakaf</a></li>
                <li><a href="bimbinganmasjid.html">Bimbingan Kemasjidan</a></li>
                   <ul>
                      <li><a href="#">Pengukuran Arah Kiblat</a></li>
                      <li><a href="#">Persyaratan pembangunan masjid</a></li>
                  </ul>
                <li><a href="haji.html">Pelayanan Ibadah Haji</a></li>
                <li><a href="#">Keluarga Sakinah</a>
                  <ul>
                      <li><a href="keluarga.html">Bimbingan Calon Pengantin</a></li>
                      <li><a href="keluarga.html">Pelayanan Bimbingan Keluarga Sakinah</a></li>
                  </ul>
                </li>
                </li>
                <li><a href="#">Galery Kegiatan</a>
                  <ul>
                      <li><a href="publikasi.html">Kegiatan 1</a></li>
                      <li><a href="publikasi.html">Kegiatan 2</a></li>
                  </ul>
                </li>
            </ul>
          </li>
          <li><a href="index.html#skills">Statistik</a></li>
          <li><a href="index.html#portfolio">Berita</a><li>
          <li><a href="index.html#contact">Contact</a></li>

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