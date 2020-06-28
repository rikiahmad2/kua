<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url("Home/dashboard"); ?>" class="brand-link">
      <img src="<?= base_url("assets/"); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">KUA Sukakarya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url("assets/"); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$nama ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url("Admin/"); ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url("Berita/"); ?>" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("Admin/profilKepala"); ?>" class="nav-link">
              <i class="nav-icon fa fa-person-booth"></i>
              <p>
                Profil Kepala KUA
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("Admin/periodesasi"); ?>" class="nav-link">
              <i class="nav-icon fa fa-chart-pie"></i>
              <p>
                Periodesasi
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="<?= base_url("Tmpt_ibadah/tempatIbadah"); ?>" class="nav-link">
              <i class="nav-icon fas fa-mosque "></i>
              <p>
                Data Masjid
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url("Penyuluh/dataPenyuluh/"); ?>" class="nav-link">
              <i class="nav-icon fas fa-people-carry "></i>
              <p>
                Data Penyuluh Agama
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url("Struktur_organisasi/"); ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-line "></i>
              <p>
                Struktur Organisasi
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url("Statistik/dataStatistik/"); ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-bar "></i>
              <p>
                Statistik
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="<?= base_url("Karyawan/"); ?>" class="nav-link">
              <i class="nav-icon fas fa-restroom "></i>
              <p>
                Karyawan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>