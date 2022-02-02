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
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/admin/assets/libs/flot/css/float-chart.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/admin/dist/css/style.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/morris/morris.css');?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://Orderss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                        <h4 class="page-title">Statistik Pemagang Kominfo</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a>Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Statistik</li>
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
              <!-- Charts 1-->
              <div class="row">
                  <div class="col-md-6">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Data Statistik Jumlah Universitas</h5>
                              <canvas id="myChart" height="400px"></canvas>
                              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                              <script>
                                var ctx = document.getElementById("myChart").getContext('2d');
                                var myChart = new Chart(ctx, {
                                  type: 'bar',
                                  data: {
                                    labels: [
                                      <?php
                                        $univreal=array();
                                        if (count($univ)>0) {
                                          foreach ($univ as $universitas) {
                                            if(in_array($universitas->asal, $univreal) == false){
                                                array_push($univreal, $universitas->asal);
                                            }
                                          }
                                          foreach($univreal as $uni){
                                            if($uni == end($univreal)){
                                                echo '"'.$uni.'"';
                                            }else echo '"'.$uni.'",';
                                          }
                                        }
                                    ?>
                                    ],
                                    datasets: [{
                                      label: '',
                                      data: [
                                        <?php
                                          $this->load->model('Mhs_model');
                                          $mhs=$this->Mhs_model;
                                             foreach ($univreal as $uni) {
                                               if($uni == end($univreal)){
                                                  echo ($mhs->getByAsal($uni));
                                               }else echo ($mhs->getByAsal($uni)).",";
                                           }
                                               ?>
                                      ],
                                      backgroundColor:
                                      'rgba(255, 99, 132, 0.2)'
                                      ,
                                      borderColor:
                                      'rgba(255,99,132,1)'
                                      ,
                                      borderWidth: 1
                                    }]
                                  },
                                  options: {
                                    scales: {
                                      yAxes: [{
                                        ticks: {
                                          beginAtZero:true
                                        }
                                      }]
                                    }
                                  }
                                });
                              </script>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Data Statistik Jumlah Sekolah</h5>
                              <canvas id="myChart2" height="400px"></canvas>
                              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                              <script>
                                var ctx = document.getElementById("myChart2").getContext('2d');
                                var myChart = new Chart(ctx, {
                                  type: 'bar',
                                  data: {
                                    labels: [
                                      <?php
                                        $sekolahreal=array();
                                        if (count($sekolah)>0) {
                                          foreach ($sekolah as $school) {
                                            if(in_array($school->asal, $sekolahreal) == false){
                                                array_push($sekolahreal, $school->asal);
                                            }
                                          }
                                          foreach($sekolahreal as $sek){
                                            if($sek == end($sekolahreal)){
                                                echo '"'.$sek.'"';
                                            }else echo '"'.$sek.'",';
                                          }
                                        }
                                    ?>
                                    ],
                                    datasets: [{
                                      label: '',
                                      data: [
                                        <?php
                                          $this->load->model('Siswa_model');
                                          $sis=$this->Siswa_model;
                                             foreach ($sekolahreal as $sek) {
                                               if($sek == end($sekolahreal)){
                                                  echo ($sis->getByAsal($sek));
                                               }else echo ($sis->getByAsal($sek)).",";
                                           }
                                               ?>
                                      ],
                                      backgroundColor:
                                      'rgba(100, 99, 132, 0.2)'
                                      ,
                                      borderColor:
                                      'rgba(255,99,132,1)'
                                      ,
                                      borderWidth: 1
                                    }]
                                  },
                                  options: {
                                    scales: {
                                      yAxes: [{
                                        ticks: {
                                          beginAtZero:true
                                        }
                                      }]
                                    }
                                  }
                                });
                              </script>
                        </div>
                      </div>
                  </div>
              </div>

                  <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Mahasiswa yang Sedang Magang</h5>
                                <div class="card-text text-center" style="font-size: 50px">
                                  <?php
                                  $i=0;
                                  foreach ($univ as $uni) {
                                    if($uni->status == 'Aktif'){
                                      $i++;
                                    }
                                  }
                                  echo $i;
                                  ?>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Siswa yang Sedang Magang</h5>
                                <div class="card-text text-center" style="font-size: 50px">
                                  <?php
                                  $j=0;
                                  foreach ($sekolah as $sek) {
                                    if($sek->status == 'Aktif'){
                                      $j++;
                                    }
                                  }
                                  echo $j;
                                  ?>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Laporan yang Dikumpulkan</h5>
                                <div class="card-text text-center" style="font-size: 50px">
                                  <?php
                                  echo count($laporan);
                                  ?>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Surat yang Diajukan</h5>
                                  <div class="card-text text-center" style="font-size: 50px">
                                    <?php
                                    echo count($surat);
                                    ?>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Project yang Dikumpulkan</h5>
                                <div class="card-text text-center" style="font-size: 50px">
                                  <?php
                                  echo count($project);
                                  ?>
                              </div>
                            </div>
                        </div>
                    </div>

                  </div>
              </div>
            </div>
        </div>
        <footer class="footer text-center">
            Kerja Praktik UNSRI. Designed and Developed by <a href="http://kominfo.sumselprov.go.id/index.php?m=ct&id=1">Dinas Komunikasi dan Informatika Provinsi Sumatera Selatan</a>.
        </footer>
    </div>
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
    <script src="<?php echo base_url('assets/admin/assets/admin/raphael/raphael.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/admin/morris/morris.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/chart/matrix.interface.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/flot/excanvas.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/flot/jquery.flot.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/flot/jquery.flot.pie.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/flot/jquery.flot.time.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/flot/jquery.flot.stack.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/flot/jquery.flot.crosshair.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/chart/jquery.peity.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/chart/matrix.charts.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/chart/turning-series.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/dist/js/pages/chart/chart-page-init.js');?>"></script>

</body>
</html>
