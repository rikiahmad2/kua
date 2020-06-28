<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8">
  <title></title>
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
      <div class="col-md-2"></div>
      <div class="col-md-8 text-center">
        <table id="example1" class="table table-bordered table-striped" style="border-color: black;">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Pendidikan</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>tugas</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i=1;
            foreach($data2 as $row)
            {

              echo "<tr>";
              echo "<td>".$row->nama."</td>";
              echo "<td>".$row->jk."</td>";
              echo "<td>".$row->pendidikan."</td>";
              echo "<td>".$row->tmpt_lahir."</td>";
              echo "<td>".$row->tgl_lahir."</td>";
              echo "<td>".$row->tugas."</td>";
              echo "</tr>";

              $i++;
            }
            ?>
          </tbody>



          <tfoot>
          </tfoot>
        </table>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
</section>


<div class="button">
  <button type="button" onclick="javascript:history.back()"><span ></span>Kembali</button>
</div>
</body>   
</html>