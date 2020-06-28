<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tagihan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("assets/"); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url("assets/"); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url("assets/"); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/"); ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Statistik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url("Home/dashboard/"); ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Statistik</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
      <!-- Table 2 -->
     <section class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <a href="<?= base_url("Statistik/tambahStatistik/"); ?>" class="btn btn-block btn-primary btn-md col-lg-2" style="margin-top: 20px; margin-left: 25px">Tambah Data</a>
            <div class="card-body"> 
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Total RT</th>
                  <th>Total RW</th>
                  <th>Total Penduduk</th>
                  <th>Total Penganut</th>
                  <th>Total Tempat Ibadah</th>
                  <th>Total Tempat Pendidikan</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i=1;
                    foreach($data as $row)
                    {

                      echo "<tr>";
                      echo "<td>".$row->id_statistik."</td>";
                      echo "<td>".$row->total_rt."</td>";
                      echo "<td>".$row->total_rw."</td>";
                      echo "<td>".$row->total_penduduk,"</td>";
                      echo "<td>".$row->total_penganut."</td>";
                      echo "<td>".$row->total_tmptibadah."</td>";
                      echo "<td>".$row->total_pendidikan."</td>";
                      echo '<td>
                            <a href="'.base_url().'Statistik/editStatistik/'.$row->id_statistik.'" class="ion-edit text-success" style="font-size: 20px;"> Edit</a>
                            </td>';
                      echo '<td>
                        <a href="'.base_url().'Statistik/deleteStatistik/'.$row->id_statistik.'" class="ion-android-delete text-danger" onclick="myDelete();" style="font-size: 20px;">  Delete</a>

                            </td>';
                      echo "</tr>";

                        $i++;
                      }
                    ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- DataTables -->
<script src="<?= base_url("assets/"); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url("assets/"); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url("assets/"); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url("assets/"); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url("assets/"); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url("assets/"); ?>dist/js/demo.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url("assets/"); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": true,
    });
  });
</script>

<script>
  function myFunction(x){
   $(".modal-body #bookId").val( x );
};
</script>

<script type="text/javascript">
 function myDelete(){
    alert("Data Berhasil Di DELETE !!");
}; 
</script>
</body>
</html>