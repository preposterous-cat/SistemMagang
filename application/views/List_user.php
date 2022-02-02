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

  <title>Welcome - Dinas Kominfo Sumsel</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/User_page/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/animate/animate.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/ionicons/css/ionicons.min.css');?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/User_page/css/sb-admin-2.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/User_page/vendor/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php base_url();?>index">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Dinas Kominfo Sumsel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php base_url();?>index">
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
        <a class="nav-link" href="<?php base_url(); ?>form_user">
          <i class="far fa-file-alt"></i>
          <span>Formulir Pendaftaran</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php base_url(); ?>confirm_user">
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
        <a class="nav-link" href="<?php base_url(); ?>">
          <i class="fas fa-child"></i>
          <span>Daftar Peserta</span></a>
      </li>

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

        <div class="container-fluid">
          <?php if ($this->session->flashdata('success_laporan')):?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <?php echo $this->session->flashdata('success_laporan'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif; ?>
          <?php if ($this->session->flashdata('Fail_laporan')): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <?php echo $this->session->flashdata('Fail_laporan'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif; ?>
          <?php if ($this->session->flashdata('success_project')):?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <?php echo $this->session->flashdata('success_project'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif; ?>
          <?php if ($this->session->flashdata('Fail_project')): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <?php echo $this->session->flashdata('Fail_project'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif; ?>
        </div>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Daftar Peserta Magang</h4>
            </div>
            <div class="card-body">
              Daftar peserta magang yang telah diajukan. Silakan menunggu konfirmasi lebih lanjut dari admin. konfirmasi
              akan dikirimkan melalui email berupa balasan keputusan diterima atau tidak, serta surat keluaran.
            </div>
          </div>

          <div class="card shadow mb-4 <?php if (empty($list2)) {
            echo 'collapse';
          } ?>" id="mahasiswa">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Peserta Magang Mahasiswa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>No HP</th>
                      <th>Email</th>
                      <th>Jenis Kegiatan</th>
                      <th>Tingkat</th>
                      <th>Asal Univeritas</th>
                      <th>Fakultas</th>
                      <th>Jurusan</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>No HP</th>
                      <th>Email</th>
                      <th>Jenis Kegiatan</th>
                      <th>Tingkat</th>
                      <th>Asal Univeritas</th>
                      <th>Fakultas</th>
                      <th>Jurusan</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    if (!empty($list)) {
                      foreach ($list as $isi):
                     ?>
                      <tr>
                        <td>
                          <?php echo $isi->nim; ?>
                        </td>
                        <td>
                          <?php echo $isi->nama; ?>
                        </td>
                        <td>
                          <?php echo $isi->no_hp; ?>
                        </td>
                        <td>
                          <?php echo $isi->email; ?>
                        </td>
                        <td>
                          <?php echo $isi->jenis; ?>
                        </td>
                        <td>
                          <?php echo $isi->tingkat; ?>
                        </td>
                        <td>
                          <?php echo $isi->asal; ?>
                        </td>
                        <td>
                          <?php echo $isi->fakultas; ?>
                        </td>
                        <td>
                          <?php echo $isi->jurusan; ?>
                        </td>
                        <td>
                          <?php echo $isi->start.' s/d '.$isi->end; ?>
                        </td>
                        <td>
                          <?php echo $isi->status; ?>
                        </td>
                      </tr>
                    <?php endforeach;}
                     ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="card shadow mb-4 <?php if (empty($list2)) {
            echo 'collapse';
          } ?>" id="siswa">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Peserta Magang Siswa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered display" id="dataTable2" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NISN</th>
                      <th>Nama</th>
                      <th>No HP</th>
                      <th>Email</th>
                      <th>Tingkat</th>
                      <th>Asal Sekolah</th>
                      <th>Jurusan</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>NISN</th>
                      <th>Nama</th>
                      <th>No HP</th>
                      <th>Email</th>
                      <th>Tingkat</th>
                      <th>Asal Sekolah</th>
                      <th>Jurusan</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    if (!empty($list2)) {
                      foreach ($list2 as $isi):
                     ?>
                      <tr>
                        <td>
                          <?php echo $isi->nisn; ?>
                        </td>
                        <td>
                          <?php echo $isi->nama; ?>
                        </td>
                        <td>
                          <?php echo $isi->no_hp; ?>
                        </td>
                        <td>
                          <?php echo $isi->email; ?>
                        </td>
                        <td>
                          <?php echo $isi->tingkat; ?>
                        </td>
                        <td>
                          <?php echo $isi->asal; ?>
                        </td>
                        <td>
                          <?php echo $isi->jurusan; ?>
                        </td>
                        <td>
                          <?php echo $isi->start.' s/d '. $isi->end; ?>
                        </td>
                        <td>
                          <?php echo $isi->status; ?>
                        </td>
                      </tr>
                    <?php endforeach;}
                     ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Kirim Laporan</h4>
            </div>
            <div class="card-body">
              Kirim laporan yang telah dibuat selama melakukan kegiatan magang
              <a href="" data-toggle="modal" data-target="#laporan" class="btn btn-primary">Kirim</a>
            </div>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Kirim Project</h4>
            </div>
            <div class="card-body">
              Kirim project yang telah dibuat selama melakukan kegiatan magang. Project terlebih dahulu
              disimpan dalam google drive atau penyimpanan online lainnya, kemudian copy link tersebut
              untuk dimasukkan ke data.
              <a href="" data-toggle="modal" data-target="#project" class="btn btn-primary">Kirim</a>
            </div>
          </div>
        </div>

        <div class="portfolio-modal modal fade" id="laporan" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <form action="<?php echo site_url('User/add_laporan');?>" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Data Laporan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-4">
              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="text-input">Judul Laporan</label>
                <div class="col-md-9">
                  <input class="form-control" id="text-input" type="text" name="judul" placeholder="Masukkan Judul Laporan">
                </div>
              </div>
            </div>
            <div class="modal-body mx-4">
              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="text-input">Penulis Laporan</label>
                <div class="col-md-9">
                  <input class="form-control" id="text-input" type="text" name="author" placeholder="Masukkan penulis">
                </div>
              </div>
            </div>
            <div class="modal-body mx-4">
              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="text-input">Masukkan Berkas</label>
                <div class="col-md-9">
                  <input type="file" name="files[]" multiple/>
                </div>
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <input type="submit" value="Submit" name="fileSubmit" class="btn btn-primary">
              <input type="reset" value="Reset" class="btn btn-primary">
            </div>
          </form>
          </div>
          </div>
        </div>

        <div class="portfolio-modal modal fade" id="project" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <form action="<?php echo site_url('User/add_project');?>" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Data Project</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-4">
              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="text-input">Nama Project</label>
                <div class="col-md-9">
                  <input class="form-control" id="text-input" type="text" name="nama" placeholder="Masukkan Nama Project">
                </div>
              </div>
            </div>
            <div class="modal-body mx-4">
              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="text-input">Kreator/Pengembang</label>
                <div class="col-md-9">
                  <input class="form-control" id="text-input" type="text" name="kreator" placeholder="Masukkan Nama Kreator/Pengembang">
                </div>
              </div>
            </div>
            <div class="modal-body mx-4">
              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="text-input">Link Project</label>
                <div class="col-md-9">
                  <input class="form-control" id="text-input" type="text" name="link" placeholder="Masukkan Link Project">
                </div>
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <input type="submit" value="Submit" class="btn btn-primary">
              <input type="reset" value="Reset" class="btn btn-primary">
            </div>
          </form>
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
          <a class="btn btn-primary" href="<?php base_url(); ?>logout">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/User_page/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/User_page/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/User_page/js/sb-admin-2.min.js');?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/User_page/vendor/datatables/jquery.dataTables.min.js');?>"></script>
  <script src="<?php echo base_url('assets/User_page/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/User_page/js/demo/datatables-demo.js');?>"></script>


</body>

</html>
