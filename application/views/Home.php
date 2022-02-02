<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Magang Kominfo</title>

  <!-- Custom fonts for this theme -->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/animate/animate.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/ionicons/css/ionicons.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/lightbox/css/lightbox.min.css');?>" rel="stylesheet">


  <!-- Theme CSS -->
  <link href="<?php echo base_url('assets/css/freelancer.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Dinas Kominfo Sumsel</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('success'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php endif; ?>
      <?php if ($this->session->flashdata('Fail')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('Fail'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php endif; ?>
      <?php if ($this->session->flashdata('email_gagal')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('email_gagal'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php endif; ?>
      <?php if ($this->session->flashdata('gagal_login')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('gagal_login'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php endif; ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal" data-target="#register">Register</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal" data-target="#login">Login</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- Masthead -->
  <header class="masthead bg-info text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="<?php echo base_url('assets/img/arvin-ganteng.png');?>" alt="" style="opacity: 95%">

      <!-- Masthead Heading -->
      <h3 class="masthead-heading text-uppercase mb-0">Ingin magang di Dinas Kominfo Sumsel?</h3>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-laptop-code fa-3x"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Yuk simak infonya!</p>

    </div>
  </header>

  <!--==========================
      Why Us Section
    ============================-->
    <main id="main">
    <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">

        <header class="section-header">
          <h3>Apa Sih Magang Itu?</h3>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <div class="why-us-img">
              <img src="<?php echo base_url('assets/img/3327590.jpg');?>" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
                <p>
                  Pelatihan atau Magang (Inggris:Training) adalah proses melatih; kegiatan atau pekerjaan
                  (KBBI edisi 2, Balai Pustaka, 1989).<br/>
                  Pelatihan mempersiapkan peserta latihan untuk mengambil jalur tindakan tertentu yang
                  dilukiskan oleh teknologi dan organisasi tempat bekerja, dan membantu peserta
                  memperbaiki prestasi dalam kegiatannya terutama mengenai pengertian dan keterampilan.
                  (Rolf P. Lynton dan Udai Pareek—Pelatihan dan Pengembangan Tenaga Kerja, Pustaka Binaman Jakarta 1998)
                    </p>
                  Sumber: Wikipedia
                  </div>
                </div>
              </div>
            </div>
            </section>
              <section id="features">
                <div class="container">
                  <header class="section-header">
                    <h3>Manfaat Magang di Kominfo Sumsel Apa?</h3>
                  </header>
                  <div class="row feature-item">
                    <div class="col-lg-6 wow fadeInUp">
                      <img src="<?php echo base_url('assets/img/3081642.jpg');?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeInUp pt-7 pt-lg-7">
                      <h4>Pengalaman Yang Berharga</h4>
                      <p>
                        Pengalaman sangat penting bagi perkembangangan kehidupan seseorang, terutama dalam hal karir.
                        Pengalaman menjadi penuntut bagi kualitas individu dalam menghadapi pesaing yang semakin ketat.
                      </p>
                      <p>
                        Pengalaman bisa didapat melalui kegiatan seperti magang, bekerja-lepas, penelitian, dan lain-lain.
                        Semakin banyak pengalaman suatu individu, maka individu tersebut akan memiliki kualitas kemampuan yang baik.
                      </p>
                    </div>
                  </div>

                  <div class="row feature-item mt-5 pt-5">
                    <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                      <img src="<?php echo base_url('assets/img/3081614.jpg');?>" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 wow fadeInUp pt-7 pt-lg-10 order-2 order-lg-1">
                      <h4>Relasi Yang Bertambah</h4>
                      <p>
                        Relasi menjadi kebutuhan dalam karir individu. Relasi yang kuat berbanding lurus dengan
                        banyaknya pengetahuan yang ada pada individu tersebut. Oleh karena itu, peningkatan relasi
                        akan menambah peluang seseorang untuk menjadi individu yang berintelektual.
                      </p>
                      <p>
                        Relasi juga berhubungan erat dengan pengalaman yang didapat. Semakin banyak relasi, Maka
                        pengalaman seseorang dapat dipastikan baik.
                      </p>
                    </div>

                  </div>

                  <div class="row feature-item pt-5">
                    <div class="col-lg-6 wow fadeInUp">
                      <img src="<?php echo base_url('assets/img/2539.jpg');?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeInUp pt-7 pt-lg-5 order-2 order-lg-1">
                      <h4>Ilmu yang Bermanfaat</h4>
                      <p>
                        Ilmu adalah alat ukur bagi seseorang yang intelektual. Orang yang berilmu dapat menjadi
                        bermanfaat bagi orang yang membutuhkan.
                      </p>
                      <p>
                        Ilmu yang bermanfaat didapat dari eksplorasi yang luas dan masif. Ilmu yang didapat akan sangat diterapkan
                        dalam dunia kerja.
                      </p>
                    </div>
                  </div>

                </div>
              </section>

            </div>

          </div>
        </div>
      </div>

<section id="call-to-action" class="wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title">Tertarik?</h3>
          <p class="cta-text">Daftar terlebih dahulu dan lakukan login. Ikuti langkah-langkah di dalamnya! </p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" data-toggle="modal" data-target="#register">Register</a>
        </div>
      </div>

    </div>
  </section><!-- #call-to-action -->

  <!-- About Section -->
  <section class="page-section bg-info text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h4 class="page-section-heading text-center text-uppercase text-white">About</h4>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="far fa-question-circle fa-2x"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-md-4 ml-auto">
          <p class="lead">Dinas Komunikasi dan Informatika adalah Dinas yang mempunyai tugas melaksanakan
            kewenangan daerah di bidang pengelolaan Teknologi Informasi dan Komunikasi serta
            melaksanakan tugas pembantuan yang diberikan oleh pemerintah dan pemerintah provinsi.
          </p>
        </div>
        <div class="col-md-4 mr-auto">
          <p class="lead">Dalam setiap kegiatannya selalu berhubungan dengan pembangunan dan
            pengembangan system informasi, pengembangan dan pemeliharaan jaringan computer antar bidang,
            pengelolaan produksi informasi dan publikasi, pengelolaan dan pengembangan komunikasi publik.
            Pada setiap kegiatan-kegiatan tersebut terbagi menjadi tiga bidang serta satu
            Sekretariat dan dikepalai oleh kepala bidang dari setiap bidangnya.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0"> Jln. Merdeka No. 10A Palembang
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Informasi lebih lanjut tentang Kominfo Sumsel</h4>
          <p class="lead mb-0">
            <a href="http://kominfo.sumselprov.go.id">Klik Di sini</a>.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Your Website 2019</small>
    </div>
  </section>


  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Modal Register -->
  <div class="portfolio-modal modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <form action="<?php base_url();?>Crud_user/add" method="POST">
      <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Register</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-4">
        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="orangeForm-Regis">No. Registrasi</label>
          <input type="text" name="no_regis" class="form-control <?php echo form_error('no_regis') ? 'is-invalid':'' ?>" value="<?php echo "$noreg";?>" readonly>
          <label class="text-danger">*Harap dicatat Nomor Registrasi</label>
        </div>
        <div class="md-form mb-3">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Nama</label>
          <input type="text" name="nama" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" placeholder="Masukkan Nama" required autocomplete="off">
        </div>
        <div class="md-form mb-3">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
          <input type="email" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" placeholder="Masukkan Email" required autocomplete="off">
        </div>
        <div class="md-form mb-3">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Password</label>
          <input type="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" placeholder="Masukkan Password" required autocomplete="off">
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <input type="submit" value="Register" class="btn btn-primary btn-lg">
      </div>
    </form>
    </div>
    </div>
  </div>

  <!-- Modal Login -->
  <div class="portfolio-modal modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <form action="<?php base_url();?>User/login_act" method="POST">
      <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Login</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-4">
        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="orangeForm-Regis">No. Registrasi</label>
          <input type="text" name="no_regis" class="form-control <?php echo form_error('no_regis') ? 'is-invalid':'' ?>" autocomplete="off">
        </div>
        <div class="md-form mb-3">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Password</label>
          <input type="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" placeholder="Masukkan Password">
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <input type="submit" value="Login" class="btn btn-primary btn-lg">
      </div>
    </form>
    </div>
    </div>
  </div>

</main>

  <!-- Bootstrap core JavaScript -->

  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?php echo base_url('assets/js/jqBootstrapValidation.js');?>"></script>
  <script src="<?php echo base_url('assets/js/contact_me.js');?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url('assets/js/freelancer.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/jquery/jquery-migrate.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/easing/easing.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/mobile-nav/mobile-nav.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/wow/wow.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/counterup/counterup.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/isotope/isotope.pkgd.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/lightbox/css/lightbox.min.css');?>"></script>
  <script src="<?php echo base_url('assets/js/main.js');?>"></script>

</body>

</html>
