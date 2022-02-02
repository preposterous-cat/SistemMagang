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
        <a class="nav-link" href="<?php base_url();?>">
          <i class="far fa-file-alt"></i>
          <span>Formulir Pendaftaran</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php base_url();?>confirm_user">
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
        <a class="nav-link" href="<?php base_url();?>list_user">
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
          <div class="row">

            <div class="col-lg-12">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary">Formulir Pendaftaran</h4>
                </div>
                <div class="card-body">
                  Formulir pendataran berisi data para peserta magang yang akan dikirim ke Dinas Kominfo Sumsel. Silakan isi data
                  dengan benar sesuai dengan tingkat pelajar.
                </div>
              </div>

            </div>
          </div>

          <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>TINGKAT PELAJAR</h3>
          <p>Pilih tingkat pelajar</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="fas fa-university" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="" data-toggle="modal" data-target="#mahasiswa">MAHASISWA</a></h4>
              <p class="description">Pilih tingkat pelajar sebagai mahasiswa di suatu universitas</p>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
          </div>
          <div class="col-md-12 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="fas fa-school" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="" data-toggle="modal" data-target="#siswa">SISWA</a></h4>
              <p class="description">Pilih tingkat pelajar sebagai siswa di suatu sekolah</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="portfolio-modal modal fade" id="mahasiswa" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <form action="<?php base_url();?>add" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Formulir Pendaftaran <strong>Mahasiswa</strong></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-4">
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">NIM</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="nim" placeholder="Masukkan NIM" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Nama</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="nama" placeholder="Masukkan Nama" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Jenis Kelamin</label>
              <div class="col-md-9 col-form-label">
                <div class="form-check">
                  <input class="form-check-input" id="radio1" type="radio" value="Laki-laki" name="gender" required>
                  <label class="form-check-label" for="radio1">Laki-laki</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" id="radio2" type="radio" value="Perempuan" name="gender" required>
                  <label class="form-check-label" for="radio2">Perempuan</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Tempat, Tanggal Lahir</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="ttl" placeholder="Masukkan TTL" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Agama</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="agama" placeholder="Masukkan Agama" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Nomor HP</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="no_hp" placeholder="Masukkan Nomor HP" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="email-input">Email</label>
              <div class="col-md-9">
                <input class="form-control" id="email-input" type="email" name="email" placeholder="Masukkan Email" autocomplete="email" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="textarea-input">Alamat</label>
              <div class="col-md-9">
                <textarea class="form-control" id="textarea-input" name="alamat" rows="6" placeholder="Masukkan Alamat.." required></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Jenis Kegiatan</label>
              <div class="col-md-9 col-form-label">
                <div class="form-check">
                  <input class="form-check-input" id="radio1" type="radio" value="Kerja Praktik" name="jenis" required>
                  <label class="form-check-label" for="radio1">Kerja Praktik</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" id="radio2" type="radio" value="Riset/Pengambilan Data" name="jenis" required>
                  <label class="form-check-label" for="radio2">Riset/Pengambilan Data</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Tingkat Pendidikan</label>
              <div class="col-md-9 col-form-label">
                <div class="form-check">
                  <input class="form-check-input" id="radio1" type="radio" value="D1" name="tingkat" required>
                  <label class="form-check-label" for="radio1">D1</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" id="radio2" type="radio" value="D2" name="tingkat" required>
                  <label class="form-check-label" for="radio2">D2</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" id="radio2" type="radio" value="D3" name="tingkat" required>
                  <label class="form-check-label" for="radio2">D3</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" id="radio2" type="radio" value="S1" name="tingkat" required>
                  <label class="form-check-label" for="radio2">S1</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" id="radio2" type="radio" value="S2" name="tingkat" required>
                  <label class="form-check-label" for="radio2">S2</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" id="radio2" type="radio" value="S3" name="tingkat" required>
                  <label class="form-check-label" for="radio2">S3</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Asal Universitas</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="asal" placeholder="Masukkan Asal Universitas" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Fakultas</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="fakultas" placeholder="Masukkan Fakultas" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Jurusan</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="jurusan" placeholder="Masukkan Jurusan" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="date-input">Masukkan Waktu Mulai Kegiatan</label>
              <div class="col-md-9">
                <input class="form-control" id="date-input" type="date" name="start" placeholder="Masukkan Waktu Mulai Kegiatan" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="date-input">Masukkan Waktu Selesai Kegiatan</label>
              <div class="col-md-9">
                <input class="form-control" id="date-input" type="date" name="end" placeholder="Masukkan Waktu Selesai Kegiatan" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="textarea-input">Skill</label>
              <div class="col-md-9">
                <textarea class="form-control" id="textarea-input" name="skill" rows="6" placeholder="Masukkan Skill.." required></textarea>
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

    <div class="portfolio-modal modal fade" id="siswa" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <form action="<?php base_url();?>add_siswa" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Formulir Pendaftaran <strong>Siswa</strong></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-4">
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">NISN</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="nisn" placeholder="Masukkan NISN" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Nama</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="nama" placeholder="Masukkan Nama" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Jenis Kelamin</label>
              <div class="col-md-9 col-form-label">
                <div class="form-check">
                  <input class="form-check-input" id="radio1" type="radio" value="Laki-laki" name="gender" required>
                  <label class="form-check-label" for="radio1">Laki-laki</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" id="radio2" type="radio" value="Perempuan" name="gender" required>
                  <label class="form-check-label" for="radio2">Perempuan</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Tempat, Tanggal Lahir</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="ttl" placeholder="Masukkan TTL" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Agama</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="agama" placeholder="Masukkan Agama" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Nomor HP</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="no_hp" placeholder="Masukkan Nomor HP" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="email-input">Email</label>
              <div class="col-md-9">
                <input class="form-control" id="email-input" type="email" name="email" placeholder="Masukkan Email" autocomplete="email" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="textarea-input">Alamat</label>
              <div class="col-md-9">
                <textarea class="form-control" id="textarea-input" name="alamat" rows="6" placeholder="Masukkan Alamat.." required></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Tingkat Pendidikan</label>
              <div class="col-md-9 col-form-label">
                <div class="form-check">
                  <input class="form-check-input" id="radio1" type="radio" value="Kelas 1" name="tingkat" required>
                  <label class="form-check-label" for="radio1">Kelas 1</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" id="radio2" type="radio" value="Kelas 2" name="tingkat" required>
                  <label class="form-check-label" for="radio2">Kelas 2</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" id="radio2" type="radio" value="Kelas 3" name="tingkat" required>
                  <label class="form-check-label" for="radio2">Kelas 3</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Asal Sekolah</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="asal" placeholder="Masukkan Asal Sekolah" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">Jurusan</label>
              <div class="col-md-9">
                <input class="form-control" id="text-input" type="text" name="jurusan" placeholder="Masukkan Jurusan" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="date-input">Masukkan Waktu Mulai Kegiatan</label>
              <div class="col-md-9">
                <input class="form-control" id="date-input" type="date" name="start" placeholder="Masukkan Waktu Mulai Kegiatan" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="date-input">Masukkan Waktu Selesai Kegiatan</label>
              <div class="col-md-9">
                <input class="form-control" id="date-input" type="date" name="end" placeholder="Masukkan Waktu Selesai Kegiatan" required>
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
  <script src="<?php echo base_url('assets/User_page/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/User_page/js/sb-admin-2.js');?>"></script>
</body>

</html>
