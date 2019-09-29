<?php
session_start();
include "../koneksi.php";

// var_dump($_SESSION['user']);
// if ($_SESSION['user']['level'] == "Admin") {
//   echo "halo Admin";
// } elseif ($_SESSION['user']['level'] == "User") {
//     echo "halo Member";
// } 
if (!$_SESSION['user']['level'] == "Admin" AND !$_SESSION['user']['level'] == "User") {
  echo "<script>alert('Anda harus Login'); </script>";
  header('location:../login/index.php');
  // exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Assesment Karyawan PT Perkebunan Nusantara IX
  </title>
  <!-- Favicon -->
  <link href="../assets/img/ptpn.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="">
        <img src="../assets/img/logo.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <!-- <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg"> -->
                <i class="fa fa-user"></i>
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
<!--             <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a> -->
            <div class="dropdown-divider"></div>
            <a href="logout.php" class="dropdown-item">
              <i class="ni ni-button-power text-red"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="">
                <img src="../assets/img/logo.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>


        <?php 
        if ($_SESSION['user']['level'] == "Admin") {
          ?>
          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class=" nav-link" href="?halaman=homeadmin">
                <i class="ni ni-tv-2 text-primary"></i> Dashboard

              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="?halaman=datasoal">
                <i class="ni ni-book-bookmark text-blue"></i> Data Soal
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="?halaman=datapengisi">
                <i class="ni ni-single-copy-04 text-orange"></i> Data Pengisi
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="?halaman=dataakun">
                <i class="ni ni-single-02 text-yellow"></i> Data Akun
              </a>
            </li>
          </ul>
          <?php
        } elseif ($_SESSION['user']['level'] == "User") {
          ?>
          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item  class=">
              <a class=" nav-link" href="?halaman=homeuser">
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="?halaman=siap">
                <i class="ni ni-book-bookmark text-blue"></i> Assessment
              </a>
            </li>
          </ul>
          <?php
        } 
        ?>
        <!-- Divider -->
        <hr class="my-3">

      </div>
    </div>
  </nav>
  
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href=""></a>

        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <!-- <i class="ni ni-single-02"></i> -->
                  <i class="fa fa-user"></i>
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">
                    <?php 
                    if ($_SESSION['user']['level'] == "Admin") {
                      echo $_SESSION['user']['nama'];
                    }
                    elseif ($_SESSION['user']['level'] == "User") {
                      echo $_SESSION['user']['nama'];
                    }
                    ?>
                  </span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
<!--               <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a> -->
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item">
                <!-- <i class="fas fa-lock"></i> -->
                <i class="ni ni-button-power text-red"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

      <!-- tempat isi -->
      <?php
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

      switch ($_GET['halaman']) {
        case 'homeadmin':
        include 'homeadmin.php';
        break;

        case 'homeuser':
        include 'homeuser.php';
        break;

        case 'datasoal':
        include 'datasoal.php';
        break;

        case 'editsoal':
        include 'editsoal.php';
        break;

        case 'hapussoal':
        include 'hapussoal.php';
        break;

        case 'lihatsoal':
        include 'lihatsoal.php';
        break;

        case 'editsoal':
        include 'editsoal.php';
        break;

        case 'tambahsoal':
        include 'tambahsoal.php';
        break;

        case 'soal_user':
        include 'soal_user.php';
        break;

        case 'datapengisi':
        include 'datapengisi.php';
        break;

        case 'lihatpengisi':
        include 'lihatpengisi.php';
        break;

        case 'hapuspengisi':
        include 'hapuspengisi.php';
        break;

        case 'dataakun':
        include 'dataakun.php';
        break;

        case 'tambahakun':
        include 'tambahakun.php';
        break;

        case 'editakun':
        include 'editakun.php';
        break;

        case 'hapusakun':
        include 'hapusakun.php';
        break;

        case 'siap':
        include 'siap.php';
        break;

        default:
        include 'index.php';
        break;
      }
      ?>
    </div>
  </div>

  <!-- <div class="container-fluid mt--7"> -->
    <div class="container-fluid">
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">Copyright
              &copy; 2019<a href="https://www.ptpnix.co.id" class="font-weight-bold ml-1" target="_blank">PT Perkebunan Nusantara IX</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!--   Core   -->
    <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--   Optional JS   -->
    <script src="../assets/js/plugins/chart.js/dist/Chart.min.js"></script>
    <script src="../assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
    <!--   Argon JS   -->
    <script src="../assets/js/argon-dashboard.min.js?v=1.1.0"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
      window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
    </script>


    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#example').DataTable();
      } );
    </script>
  </body>

  </html>