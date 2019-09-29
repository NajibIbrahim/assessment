<?php
include 'koneksi.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Login | Assessment Karyawan PT Perkebunan Nusantara IX
  </title>
  <!-- Favicon -->
  <link href="assets/img/ptpn.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-5">
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-4">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <a class="navbar-brand" href="index.html">
                  <img src="assets/img/logo.png" width="200px" />
                </a>
                <!-- <h2>Login</h2> -->
              </div>
              <form  action="" method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control text-primary" placeholder="Masukkan NIK" type="text" name="username" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text "><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control text-primary" placeholder="Masukkan Password" type="password" name="password" required>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4" name="login">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="py-2">
      <div class="container">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-12">
            <div class="copyright text-center text-muted">Copyright
              © 2019<a href="https://www.ptpnix.co.id" class="font-weight-bold ml-1" target="_blank">PT Perkebunan Nusantara IX</a>
            </div>
          </div>

        </div>
      </div>
    </footer>
  </div>
  <!--   Core   -->
  <script src="assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
    TrackJS.install({
      token: "ee6fab19c5a04ac1a32a645abde4613a",
      application: "argon-dashboard-free"
    });
  </script>
</body>

</html>
<?php
if(isset($_POST['login'])){
  $username = $conn->real_escape_string($_POST['username']);
  $password = md5($conn->real_escape_string($_POST['password']));

  $sql = $conn->query("SELECT * FROM akun WHERE username='$username' AND password='$password' ");
  $result = $sql->num_rows;
  if ($result > 0 ) {
    $data = $sql->fetch_assoc();
    $_SESSION['user'] = $data;
    
    $sql= "INSERT INTO `login`(`username`, `password`, `level`) 
    VALUES ('".$_POST['username']."',
    '$password')";

    ?>
    <script type="text/javascript">
      alert("Berhasil");
      <?php 
      if ($_SESSION['user']['level'] == "Admin") {
        ?>
        document.location="data/index.php?halaman=homeadmin";
      <?php }
      elseif ($_SESSION['user']['level'] == "User") {
        ?>
        document.location="data/index.php?halaman=homeuser";
      <?php }
      ?>
    </script>
    <?php
  }else{
    ?>
    <script type="text/javascript">
      alert("Gagal Login");document.location = "";
    </script>
    <?php
  } 
} 
?>