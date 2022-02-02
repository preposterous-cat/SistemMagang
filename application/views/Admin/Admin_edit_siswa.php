<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php  if ($this->session->userdata('id') == '' || $this->session->userdata('id') != 'Master' ) {
    redirect('Admin/index', 'refresh');
} ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <title><?php echo $siswa->nisn; ?> - Kerja Praktik</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/admin/dist/css/style.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/User_page/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?php site_url('Admin/admin_page'); ?>">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url('assets/admin/assets/images/kominfo.png');?>" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text
                        <span class="logo-text">

                             <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" />

                        </span>-->
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <a class="dropdown-item" style="color: red" href="<?php echo site_url('Admin/index'); ?>"><i class="fa fa-power-off m-r-12 m-l-5"></i> Logout</a>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('Admin/admin_page'); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('Admin/statistik_page'); ?>" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Charts</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Tables </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo site_url('Admin/peserta_page'); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Tabel Peserta </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo site_url('Admin/laporan_page'); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Tabel Laporan </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo site_url('Admin/projek_page'); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Tabel Projek </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo site_url('Admin/surat_page'); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Tabel Surat </span></a></li>
                              </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('Admin/user_page'); ?>" aria-expanded="false"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu">Daftar User</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit <?php echo $siswa->nisn; ?></h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a>Admin</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Tables</li>
                                    <li class="breadcrumb-item active" aria-current="page">Tabel Peserta</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                  <div class="container-fluid">
                    <?php if ($this->session->flashdata('success_update')){ ?>
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $this->session->flashdata('success_update'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php } ?>
                    <form method="POST" action="<?php site_url('Admin/edit_siswa/'.$siswa->nisn); ?>">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input">NISN</label>
                      <div class="col-md-9">
                        <input class="form-control" id="text-input" type="text" name="nisn" value="<?php echo $siswa->nisn; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input">Nama</label>
                      <div class="col-md-9">
                        <input class="form-control" id="text-input" type="text" name="nama" value="<?php echo $siswa->nama; ?>" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Jenis Kelamin</label>
                      <div class="col-md-9 col-form-label">
                        <div class="form-check">
                          <input class="form-check-input" id="radio1" type="radio" value="Laki-laki" name="gender" <?php if ($siswa->gender == 'Laki-laki') echo "checked";?> >
                          <label class="form-check-label" for="radio1">Laki-laki</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" id="radio2" type="radio" value="Perempuan" name="gender" <?php if ($siswa->gender == 'Perempuan') echo "checked";?> >
                          <label class="form-check-label" for="radio2">Perempuan</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input">Tempat, Tanggal Lahir</label>
                      <div class="col-md-9">
                        <input class="form-control" id="text-input" type="text" name="ttl" value="<?php echo $siswa->ttl; ?>"  >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input">Agama</label>
                      <div class="col-md-9">
                        <input class="form-control" id="text-input" type="text" name="agama" value="<?php echo $siswa->agama; ?>" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input">Nomor HP</label>
                      <div class="col-md-9">
                        <input class="form-control" id="text-input" type="text" name="no_hp" value="<?php echo $siswa->no_hp; ?>" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="email-input">Email</label>
                      <div class="col-md-9">
                        <input class="form-control" id="email-input" type="email" name="email" value="<?php echo $siswa->email; ?>" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input">Alamat</label>
                      <div class="col-md-9">
                        <textarea class="form-control" id="textarea-input" name="alamat" rows="6" value="<?php echo $siswa->alamat; ?>" ><?php echo $siswa->alamat; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Tingkat Pendidikan</label>
                      <div class="col-md-9 col-form-label">
                        <div class="form-check">
                          <input class="form-check-input" id="radio1" type="radio" value="Kelas 1" name="tingkat" <?php if ($siswa->tingkat == 'Kelas 1') echo "checked";?> >
                          <label class="form-check-label" for="radio1">Kelas 1</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" id="radio2" type="radio" value="Kelas 2" name="tingkat" <?php if ($siswa->tingkat == 'Kelas 2') echo "checked";?> >
                          <label class="form-check-label" for="radio2">Kelas 2</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" id="radio2" type="radio" value="Kelas 3" name="tingkat" <?php if ($siswa->tingkat == 'Kelas 3') echo "checked";?> >
                          <label class="form-check-label" for="radio2">Kelas 3</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input">Asal Sekolah</label>
                      <div class="col-md-9">
                        <input class="form-control" id="text-input" type="text" name="asal" value="<?php echo $siswa->asal; ?>" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input">Jurusan</label>
                      <div class="col-md-9">
                        <input class="form-control" id="text-input" type="text" name="jurusan" value="<?php echo $siswa->jurusan; ?>" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="date-input">Masukkan Waktu Mulai Kegiatan</label>
                      <div class="col-md-9">
                        <input class="form-control" id="date-input" type="date" name="start" value="<?php echo $siswa->start; ?>" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="date-input">Masukkan Waktu Selesai Kegiatan</label>
                      <div class="col-md-9">
                        <input class="form-control" id="date-input" type="date" name="end" value="<?php echo $siswa->end; ?>" >
                      </div>
                    </div>
                    <div class="justify-content-center">
                      <input type="submit" value="Update" class="btn btn-primary">
                      <input type="reset" value="Reset" class="btn btn-primary">
                    </div>
                  </form>
                  </div>
              </div>
            </div>
        </div>
      </div>

            <footer class="footer text-center">
                Kerja Praktik UNSRI. Designed and Developed by <a href="http://kominfo.sumselprov.go.id/index.php?m=ct&id=1">Dinas Komunikasi dan Informatika Provinsi Sumatera Selatan</a>.
            </footer>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="<?php echo base_url('assets/admin/assets/libs/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/admin/assets/libs/popper.js/dist/umd/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/extra-libs/sparkline/sparkline.js');?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/admin/dist/js/waves.js');?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/admin/dist/js/sidebarmenu.js');?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/admin/dist/js/custom.min.js');?>"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
</body>

</html>
