<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Validation Form</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("assets/"); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/"); ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kepala</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Kepala KUA</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=base_url();?>Admin/submitTambahKepala" method ="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Kode Detail</label>
                    <input type="number" name="kode_detail" class="form-control" id="kode" placeholder="Kode Detail" value="" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Kepala</label>
                    <select type="text" name="kode_kepala" class="form-control" id="nomor" placeholder="Kode Kepala" value="">
                    <?php
                    $i=1;
                    foreach($data as $row)
                    {
                      echo '<option value="'.$row->kode_kepala.'">'.$row->kode_kepala.'</option>';
                        $i++;
                    }
                    ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor</label>
                    <input type="text" name="nomor" class="form-control" id="nomor" placeholder="Nomor" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Foto</label>
                    <input type="file" name="foto" class="form-control" id="foto" placeholder="Foto" value="<?=base_url("foto/")?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="number" name="nip" class="form-control" id="nip" placeholder="Nip" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TTL</label>
                    <input type="date" name="ttl" class="form-control" id="ttl" placeholder="TTL" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kewarganegaraan</label>
                    <input type="text" name="kewarganegaraan" class="form-control" id="Kewarganegaraan" placeholder="Kewarganegaraan" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Agama</label>
                    <input type="text" name="agama" class="form-control" id="agama" placeholder="Agama" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Jabatan" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Prestasi</label>
                    <input type="text" name="prestasi" class="form-control" id="prestasi" placeholder="Foto" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Riwayat Pendidikan</label>
                    <input type="text" name="riwayat_pendidikan" class="form-control" id="riwayat_pendidikan" placeholder="Riwayat Pendidikan" value="">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" value="upload" class="btn btn-primary btn-md col-2 float-right" onclick="myFunction();">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url("assets/"); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url("assets/"); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="<?= base_url("assets/"); ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url("assets/"); ?>/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url("assets/"); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url("assets/"); ?>dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
<script type="text/javascript">
  function myFunction(){
    alert("Data Dirubah !");
  }
</script>
<!-- overlayScrollbars -->
<script src="<?= base_url("assets/"); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
</body>
</html>
