<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if ($this->session->userdata('no_regis') == '' ) {
  redirect('Welcome', 'refresh');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lihat data - Dinas Kominfo Sumsel</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/User_page/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/User_page/css/sb-admin-2.css');?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('User/index'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Dinas Kominfo Sumsel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('User/index'); ?>">
          <i class="fas fa-door-open"></i>
          <span>Welcome</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pendaftaran
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('User/form_user'); ?>">
          <i class="far fa-file-alt"></i>
          <span>Formulir Pendaftaran</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('User/confirm_user'); ?>">
          <i class="fas fa-user-check"></i>
          <span>Konfirmasi Pendaftaran</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Peserta Magang
      </div>

      <!-- Nav Item - Daftar Peserta-->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('User/list_user'); ?>">
          <i class="fas fa-child"></i>
          <span>Daftar Peserta</span></a>
      </li>

      <!-- Nav Item - Penilaian-->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">No Reg: <?php echo $this->session->userdata('no_regis'); ?></span>
                  <i class="fas fa-arrow-down"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">NISN</label>
            <div class="col-md-9">
              <input class="form-control" id="text-input" type="text" name="nisn" value="<?php echo $siswa->nisn; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Nama</label>
            <div class="col-md-9">
              <input class="form-control" id="text-input" type="text" name="nama" value="<?php echo $siswa->nama; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">Jenis Kelamin</label>
            <div class="col-md-9 col-form-label">
              <div class="form-check">
                <input class="form-check-input" id="radio1" type="radio" value="Laki-laki" name="gender" <?php if ($siswa->gender == 'Laki-laki') echo "checked";?> readonly>
                <label class="form-check-label" for="radio1">Laki-laki</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" id="radio2" type="radio" value="Perempuan" name="gender" <?php if ($siswa->gender == 'Perempuan') echo "checked";?> readonly>
                <label class="form-check-label" for="radio2">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Tempat, Tanggal Lahir</label>
            <div class="col-md-9">
              <input class="form-control" id="text-input" type="text" name="ttl" value="<?php echo $siswa->ttl; ?>" readonly >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Agama</label>
            <div class="col-md-9">
              <input class="form-control" id="text-input" type="text" name="agama" value="<?php echo $siswa->agama; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Nomor HP</label>
            <div class="col-md-9">
              <input class="form-control" id="text-input" type="text" name="no_hp" value="<?php echo $siswa->no_hp; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="email-input">Email</label>
            <div class="col-md-9">
              <input class="form-control" id="email-input" type="email" name="email" value="<?php echo $siswa->email; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="textarea-input">Alamat</label>
            <div class="col-md-9">
              <textarea class="form-control" id="textarea-input" name="alamat" rows="6" value="<?php echo $siswa->alamat; ?>" readonly><?php echo $siswa->alamat; ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">Tingkat Pendidikan</label>
            <div class="col-md-9 col-form-label">
              <div class="form-check">
                <input class="form-check-input" id="radio1" type="radio" value="Kelas 1" name="tingkat" <?php if ($siswa->tingkat == 'Kelas 1') echo "checked";?> readonly>
                <label class="form-check-label" for="radio1">Kelas 1</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" id="radio2" type="radio" value="Kelas 2" name="tingkat" <?php if ($siswa->tingkat == 'Kelas 2') echo "checked";?> readonly>
                <label class="form-check-label" for="radio2">Kelas 2</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" id="radio2" type="radio" value="Kelas 3" name="tingkat" <?php if ($siswa->tingkat == 'Kelas 3') echo "checked";?> readonly>
                <label class="form-check-label" for="radio2">Kelas 3</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Asal Sekolah</label>
            <div class="col-md-9">
              <input class="form-control" id="text-input" type="text" name="asal" value="<?php echo $siswa->asal; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="text-input">Jurusan</label>
            <div class="col-md-9">
              <input class="form-control" id="text-input" type="text" name="jurusan" value="<?php echo $siswa->jurusan; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="date-input">Masukkan Waktu Mulai Kegiatan</label>
            <div class="col-md-9">
              <input class="form-control" id="date-input" type="date" name="start" value="<?php echo date('Y-m-d', strtotime($siswa->start)); ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="date-input">Masukkan Waktu Selesai Kegiatan</label>
            <div class="col-md-9">
              <input class="form-control" id="date-input" type="date" name="end" value="<?php echo date('Y-m-d', strtotime($siswa->end)); ?>" readonly>
            </div>
          </div>

        </div>
      <!-- End of Main Content -->

      <!-- Footer -->
       <footer class="sticky-footer bg-white">
         <div class="container my-auto">
           <div class="copyright text-center my-auto">
             <span>Kerja Praktik UNSRI. Designed and Developed by <a href="http://kominfo.sumselprov.go.id/index.php?m=ct&id=1">Dinas Komunikasi dan Informatika Provinsi Sumatera Selatan</a>.</span>
           </div>
         </div>
       </footer>
       <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda yakin ingin Keluar?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo site_url('User/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/User_page/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/User_page/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/User_page/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/User_page/js/sb-admin-2.min.js');?>"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
