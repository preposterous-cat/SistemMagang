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
          <?php if ($this->session->flashdata('success_update')){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?php echo $this->session->flashdata('success_update'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php } ?>
          <form method="POST" action="<?php site_url('User/edit_mhs/'.$mhs->nim); ?>">
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">NIM</label>
              <div class="col-md-9">
                <input class="form-control <?php echo form_error('nim') ? 'is-invalid':'' ?>" id="text-input" type="text" name="nim" value="<?php echo $mhs->nim; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Nama</label>
              <div class="col-md-9">
                <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" id="text-input" type="text" name="nama" value="<?php echo $mhs->nama; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Jenis Kelamin</label>
              <div class="col-md-9 col-form-label">
                <div class="form-check">
                  <input class="form-check-input <?php echo form_error('gender') ? 'is-invalid':'' ?>" id="radio1" type="radio" value="Laki-laki" name="gender" <?php if ($mhs->gender == 'Laki-laki') echo "checked";?> required>
                  <label class="form-check-label" for="radio1">Laki-laki</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input <?php echo form_error('gender') ? 'is-invalid':'' ?>" id="radio2" type="radio" value="Perempuan" name="gender" <?php if ($mhs->gender == 'Perempuan') echo "checked";?> required>
                  <label class="form-check-label" for="radio2">Perempuan</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Tempat, Tanggal Lahir</label>
              <div class="col-md-9">
                <input class="form-control <?php echo form_error('ttl') ? 'is-invalid':'' ?>" id="text-input" type="text" name="ttl" value="<?php echo $mhs->ttl; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Agama</label>
              <div class="col-md-9">
                <input class="form-control <?php echo form_error('agama') ? 'is-invalid':'' ?>" id="text-input" type="text" name="agama" value="<?php echo $mhs->agama; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Nomor HP</label>
              <div class="col-md-9">
                <input class="form-control <?php echo form_error('no_hp') ? 'is-invalid':'' ?>" id="text-input" type="text" name="no_hp" value="<?php echo $mhs->no_hp; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="email-input">Email</label>
              <div class="col-md-9">
                <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" id="email-input" type="email" name="email" value="<?php echo $mhs->email; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="textarea-input">Alamat</label>
              <div class="col-md-9">
                <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="textarea-input" name="alamat" rows="6" value="<?php echo $mhs->alamat; ?>" required><?php echo $mhs->alamat; ?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Jenis Kegiatan</label>
              <div class="col-md-9 col-form-label">
                <div class="form-check">
                  <input class="form-check-input <?php echo form_error('jenis') ? 'is-invalid':'' ?>" id="radio1" type="radio" value="Kerja Praktik" name="jenis" <?php if ($mhs->jenis == 'Kerja Praktik') echo "checked";?> required>
                  <label class="form-check-label" for="radio1">Kerja Praktik</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input <?php echo form_error('jenis') ? 'is-invalid':'' ?>" id="radio2" type="radio" value="Riset/Pengambilan Data" name="jenis" <?php if ($mhs->jenis == 'Riset/Pengambilan Data') echo "checked";?> required>
                  <label class="form-check-label" for="radio2">Riset/Pengambilan Data</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Tingkat Pendidikan</label>
              <div class="col-md-9 col-form-label">
                <div class="form-check">
                  <input class="form-check-input <?php echo form_error('tingkat') ? 'is-invalid':'' ?>" id="radio1" type="radio" value="D1" name="tingkat" <?php if ($mhs->tingkat == 'D1') echo "checked";?> required>
                  <label class="form-check-label" for="radio1">D1</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input <?php echo form_error('tingkat') ? 'is-invalid':'' ?>" id="radio2" type="radio" value="D2" name="tingkat" <?php if ($mhs->tingkat == 'D2') echo "checked";?> required>
                  <label class="form-check-label" for="radio2">D2</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input <?php echo form_error('tingkat') ? 'is-invalid':'' ?>" id="radio2" type="radio" value="D3" name="tingkat" <?php if ($mhs->tingkat == 'D3') echo "checked";?> required>
                  <label class="form-check-label" for="radio2">D3</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input <?php echo form_error('tingkat') ? 'is-invalid':'' ?>" id="radio2" type="radio" value="S1" name="tingkat" <?php if ($mhs->tingkat == 'S1') echo "checked";?> required>
                  <label class="form-check-label" for="radio2">S1</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input <?php echo form_error('tingkat') ? 'is-invalid':'' ?>" id="radio2" type="radio" value="S2" name="tingkat" <?php if ($mhs->tingkat == 'S2') echo "checked";?> required>
                  <label class="form-check-label" for="radio2">S2</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input <?php echo form_error('tingkat') ? 'is-invalid':'' ?>" id="radio2" type="radio" value="S3" name="tingkat" <?php if ($mhs->tingkat == 'S3') echo "checked";?> required>
                  <label class="form-check-label" for="radio2">S3</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Asal Universitas</label>
              <div class="col-md-9">
                <input class="form-control <?php echo form_error('asal') ? 'is-invalid':'' ?>" id="text-input" type="text" name="asal" value="<?php echo $mhs->asal; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Fakultas</label>
              <div class="col-md-9">
                <input class="form-control <?php echo form_error('fakultas') ? 'is-invalid':'' ?>" id="text-input" type="text" name="fakultas" value="<?php echo $mhs->fakultas; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Jurusan</label>
              <div class="col-md-9">
                <input class="form-control <?php echo form_error('jurusan') ? 'is-invalid':'' ?>" id="text-input" type="text" name="jurusan" value="<?php echo $mhs->jurusan; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="date-input">Masukkan Waktu Mulai Kegiatan</label>
              <div class="col-md-9">
                <input class="form-control <?php echo form_error('start') ? 'is-invalid':'' ?>" id="date-input" type="date" name="start" value="<?php echo $mhs->start; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="date-input">Masukkan Waktu Selesai Kegiatan</label>
              <div class="col-md-9">
                <input class="form-control <?php echo form_error('end') ? 'is-invalid':'' ?>" id="date-input" type="date" name="end" value="<?php echo $mhs->end; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="textarea-input">Skill</label>
              <div class="col-md-9">
                <textarea class="form-control <?php echo form_error('skill') ? 'is-invalid':'' ?>" id="textarea-input" name="skill" rows="6" value="<?php echo $mhs->skill; ?>" required><?php echo $mhs->skill; ?></textarea>
              </div>
            </div>
          <div class="justify-content-center">
            <input type="submit" value="Update" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-primary">
          </div>
        </form>
        </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
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
