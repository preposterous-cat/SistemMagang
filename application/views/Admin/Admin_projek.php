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
    <title>Master - Kerja Praktik</title>

    <link href="<?php echo base_url('assets/User_page/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/animate/animate.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/ionicons/css/ionicons.min.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/admin/assets/libs/flot/css/float-chart.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/dist/css/style.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/assets/libs/datatables/media/css/jquery.dataTables.min.css');?>" rel="stylesheet">
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
                        <h4 class="page-title">Daftar Peserta</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a>Admin</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Tables</li>
                                    <li class="breadcrumb-item active" aria-current="page">Tabel Projek</li>
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
                <div class="card shadow mb-4" id="mahasiswa">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Projek Peserta Magang</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>No Registrasi</th>
                            <th>Nama Projek</th>
                            <th>Kreator</th>
                            <th>Link Projek</th>
                            <th>Tanggal Kirim</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>No Registrasi</th>
                            <th>Nama Projek</th>
                            <th>Kreator</th>
                            <th>Link Projek</th>
                            <th>Tanggal Kirim</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <?php
                          if (!empty($projek)) {
                            foreach ($projek as $isi):
                           ?>
                            <tr>
                              <td>
                                <?php echo $isi->no_regis; ?>
                              </td>
                              <td>
                                <?php echo $isi->nama_projek; ?>
                              </td>
                              <td>
                                <?php echo $isi->kreator; ?>
                              </td>
                              <td>
                                <?php echo $isi->link; ?>
                              </td>
                              <td>
                                <?php echo date('d-m-Y', strtotime($isi->tanggal)); ?>
                              </td>
                              <td>
                                <a onclick="deleteConfirm('<?php echo site_url('Admin/hapus_projek/'.$isi->nama_projek);?>')"
                                  href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus Data</a>
                              </td>
                            </tr>
                          <?php endforeach;}
                           ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
            <footer class="footer text-center">
                Kerja Praktik UNSRI. Designed and Developed by <a href="http://kominfo.sumselprov.go.id/index.php?m=ct&id=1">Dinas Komunikasi dan Informatika Provinsi Sumatera Selatan</a>.
            </footer>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

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

    <script>
        function deleteConfirm(url){
           $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
    }
    </script>
    <script src="<?php echo base_url('assets/admin/assets/libs/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/admin/assets/libs/popper.js/dist/umd/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/admin/dist/js/sidebarmenu.js');?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/admin/dist/js/custom.min.js');?>"></script>
    <script src="<?php echo base_url('assets/User_page/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/User_page/vendor/datatables/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/User_page/js/demo/datatables-demo.js');?>"></script>
    <script src="<?php echo base_url('assets/User_page/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <script src="<?php echo base_url('assets/User_page/js/sb-admin-2.min.js');?>"></script>
</body>

</html>
