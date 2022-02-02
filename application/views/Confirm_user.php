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
  <link href="<?php echo base_url('assets/User_page/css/sb-admin-2.css');?>" rel="stylesheet" type="text/css">
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
        <a class="nav-link" href="<?php base_url(); ?>">
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
        <a class="nav-link" href="<?php base_url(); ?>list_user">
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
          <?php if ($this->session->flashdata('success')):?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <?php echo $this->session->flashdata('success'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif; ?>
          <?php if ($this->session->flashdata('Fail')): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <?php echo $this->session->flashdata('Fail'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif; ?>
          <?php if ($this->session->flashdata('success_surat')):?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <?php echo $this->session->flashdata('success_surat'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif; ?>
          <?php if ($this->session->flashdata('Fail_surat')): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <?php echo $this->session->flashdata('Fail_surat'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif; ?>
          <?php if ($this->session->flashdata('failed_access')): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <?php echo $this->session->flashdata('failed_access'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif; ?>
      </div>
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Konfirmasi Pendaftaran</h4>
            </div>
            <div class="card-body">
              Konfirmasi data-data peserta magang yang akan diajukan ke Dinas Kominfo Sumsel. Pastikan semua data terisi dengan benar.
              Jika sudah dipastikan kebenaran datanya, silakan "confirm" tiap data peserta yang diajukan.
            </div>
          </div>

          <section id="services" class="section-bg">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><i class="fas fa-university" style="color: #ff689b;"></i></div>
                    <h4 class="title"><a href="" data-toggle="collapse" data-target="#mahasiswa">TABEL MAHASISWA</a></h4>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                </div>
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                  <div class="box">
                    <div class="icon" style="background: #fff0da;"><i class="fas fa-school" style="color: #e98e06;"></i></div>
                    <h4 class="title"><a href="" data-toggle="collapse" data-target="#siswa">TABEL SISWA</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <div class="card shadow mb-4 collapse" id="mahasiswa">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Peserta Magang Mahasiswa yang Diajukan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Asal</th>
                      <th>Confirmed</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Asal</th>
                      <th>Confirmed</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    if (!empty($pengisian)) {
                      foreach ($pengisian as $isi):
                     ?>
                      <tr>
                        <td>
                          <?php echo $isi->nim; ?>
                        </td>
                        <td>
                          <?php echo $isi->nama; ?>
                        </td>
                        <td>
                          <?php echo $isi->asal; ?>
                        </td>
                        <td>
                          <?php if ($isi->checked == 'Unchecked') {?>
                            <div class="container">
                              <div class="icon"><i class="fas fa-times-circle fa-3x" style="color: #d9534f;"></i></div>
                          </div>
                          <?php }else {?>
                            <div class="container">
                              <div class="icon"><i class="fas fa-check-circle fa-3x" style="color: #5cb85c;"></i></div>
                            </div>
                        <?php }?>
                        </td>
                        <td>
                          <?php if ($isi->checked == 'Unchecked') {
                            ?>
                          <a href="<?php base_url(); ?>lihat_Data_Mhs/<?php echo $isi->nim; ?>" class="btn btn-small text-primary"><i class="fas fa-tv"></i>Lihat Data</a>
                          <a href="<?php base_url(); ?>edit_mhs/<?php echo $isi->nim; ?>" class="btn btn-small text-primary"><i class="far fa-edit"></i>Edit Data</a>
                          <a onclick="deleteConfirm('<?php echo site_url('User/hapus_mhs/'.$isi->nim);?>')"
                            href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus Data</a>
                        <?php } else{ ?>
                          <a href="<?php base_url(); ?>lihat_Data_Mhs/<?php echo $isi->nim; ?>" class="btn btn-success">Lihat Data</a>
                        <?php } ?>
                        </td>
                      </tr>
                    <?php endforeach;}
                     ?>
                  </tbody>
                </table>
              </div>
              <a href="<?php base_url(); ?>checked_mhs" class="btn btn-primary">Confirm All</a>
            </div>
          </div>

          <div class="card shadow mb-4 collapse" id="siswa">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Peserta Magang Siswa yang Diajukan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered display" id="dataTable2" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NISN</th>
                      <th>Nama</th>
                      <th>Asal</th>
                      <th>Confirmed</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>NISN</th>
                      <th>Nama</th>
                      <th>Asal</th>
                      <th>Confirmed</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    if (!empty($pengisian_siswa)) {
                      foreach ($pengisian_siswa as $isi):
                     ?>
                      <tr>
                        <td>
                          <?php echo $isi->nisn; ?>
                        </td>
                        <td>
                          <?php echo $isi->nama; ?>
                        </td>
                        <td>
                          <?php echo $isi->asal; ?>
                        </td>
                        <td>
                          <?php if ($isi->checked == 'Unchecked') {?>
                            <div class="container">
                              <div class="icon"><i class="fas fa-times-circle fa-3x" style="color: #d9534f;"></i></div>
                          </div>
                          <?php }else {?>
                            <div class="container">
                              <div class="icon"><i class="fas fa-check-circle fa-3x" style="color: #5cb85c;"></i></div>
                            </div>
                        <?php }?>
                        </td>
                        <td>
                          <?php if ($isi->checked == 'Unchecked') {
                            ?>
                          <a href="<?php base_url(); ?>lihat_Data_Siswa/<?php echo $isi->nisn; ?>" class="btn btn-small text-primary"><i class="fas fa-tv"></i> Lihat</a>
                          <a href="<?php base_url(); ?>edit_siswa/<?php echo $isi->nisn; ?>" class="btn btn-small text-primary"><i class="far fa-edit"></i> Edit</a>
                          <a onclick="deleteConfirm('<?php echo site_url('User/hapus_siswa/'.$isi->nisn);?>')"
                            href="#" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                        <?php } else{ ?>
                          <a href="<?php base_url(); ?>lihat_Data_Siswa/<?php echo $isi->nisn; ?>" class="btn btn-success">Lihat Data</a>
                        <?php } ?>
                        </td>
                      </tr>
                    <?php endforeach;}
                     ?>
                  </tbody>
                </table>
              </div>
                <a href="<?php base_url(); ?>checked_siswa" class="btn btn-primary">Confirm All</a>
            </div>
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Lampiran Berkas</h4>
            </div>
            <div class="card-body">
              Kirim berkas yang dibutuhkan sesuai dengan syarat yang tertera pada halaman 'Welcome'
              <form method="post" action="<?php base_url();?>add_surat" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Choose Files</label>
                  <input type="file" name="files[]" multiple/>
                </div>
                <div class="form-group">
                  <input type="submit" name="fileSubmit" value="UPLOAD"/>
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

  <!-- Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anda Yakin?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>

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
  <script>
    function deleteConfirm(url){
	     $('#btn-delete').attr('href', url);
	      $('#deleteModal').modal();
}
</script>
<script>
  $(document).ready(function() {
    $('table.display').DataTable();
  } );
</script>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/User_page/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/User_page/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/User_page/js/sb-admin-2.js');?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/User_page/vendor/datatables/jquery.dataTables.min.js');?>"></script>
  <script src="<?php echo base_url('assets/User_page/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
  <script src="<?php echo base_url('assets/User_page/js/demo/datatables-demo.js');?>"></script>
</body>

</html>
