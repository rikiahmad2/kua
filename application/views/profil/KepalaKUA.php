<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="utf-8">
        <title>KepalaKUA</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
      
        <!-- Favicons -->
        <link href="<?= base_url("assets/"); ?>img/favicon.png" rel="icon">
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

    </head>

     <section id="about">
      <div class="container">
        <div class="row">
        <div id="page-inner"> 
             <center><h5> <b>Kepala KUA Periode sekarang</b> </h5></center>
        </div>
         <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="width:100%"" background-color= white" border="white">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Tempat, tanggal lahir</th>
                        <th>Kewarganegaraan</th>
                        <th>Agama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Jabatan</th>
                        <th>Awal Jabatan</th>
                        <th>Akhir Jabatan</th>
                        <th>Prestasi</th>
                        <th>Riwayat Pendidikan</th>
                    </tr>
                </thead>
            <tbody>
               <?php
                      $i=1;
                      foreach($data2 as $row)
                      {

                        echo "<tr>";
                        echo "<td>".$row->nomor."</td>";
                        echo "<td> <img src =".base_url("foto/$row->foto")." style=\"height: 180px\"></td>";
                        echo "<td>".$row->nama."</td>";
                        echo "<td>".$row->nip."</td>";
                        echo "<td>".$row->ttl."</td>";
                        echo "<td>".$row->kewarganegaraan."</td>";
                        echo "<td>".$row->agama."</td>";
                        echo "<td>".$row->email."</td>";
                        echo "<td>".$row->alamat."</td>";
                        echo "<td>".$row->jabatan."</td>";
                        echo "<td>".$row->awal."</td>";
                        echo "<td>".$row->akhir."</td>";
                        echo "<td>".$row->prestasi."</td>";
                        echo "<td>".$row->riwayat_pendidikan."</td>";
                        echo "</tr>";
                        $i++;
                      }
                    ?>
            </tbody>
        </table>
         </div>

        <div id="page-inner"> 
            <center><h5><br><br><b>Periodesasi Kepala KUA Kec. Sukakarya </b> </h5></center>
        </div>
         <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="width:100%"" background-color= white" border="white">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Awal Jabatan</th>
                        <th>Akhir Jabatan</th>
                    </tr>
                </thead>
            <tbody>
               <?php
                  $i=1;
                  foreach($data as $row)
                  {

                    echo "<tr>";
                    echo "<td>".$row->nomor."</td>";
                    echo "<td>".$row->nama."</td>";
                    echo "<td>".$row->awal."</td>";
                    echo "<td>".$row->akhir."</td>";
                    echo "</tr>";
                    $i++;
                  }
                ?>
            </tbody>
        </table>
         </div>

        </div>
    </div>
    </section>
    <div class="button">
        <button type="button" onclick="javascript:history.back()"><span ></span>Kembali</button>
     </div>
</body>   
</html>