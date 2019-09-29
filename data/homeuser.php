    <!-- Header -->
    <div class="header pb-9 pt-5 pt-lg-0 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/back.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-10 col-md-10">
            <h1 class="display-2 text-white">
              <?php

              date_default_timezone_set("Asia/Jakarta");

              $b = time();
              $hour = date("G",$b);

              if ($hour>=4 && $hour<=11)
              {
                echo "Selamat Pagi";
              }
              elseif ($hour >=12 && $hour<=14)
              {
                echo "Selamat Siang";
              }
              elseif ($hour >=15 && $hour<=17)
              {
                echo "Selamat Sore";
              }
              elseif ($hour >=17 && $hour<=18)
              {
                echo "Selamat Petang";
              }
              elseif ($hour >18 && $hour<=23)
              {
                echo "Selamat Malam";
              }
              elseif ($hour >=0 && $hour<=3)
              {
                echo "Selamat Malam";
              }
              ?>

            </h1>
            <h2 class="text-white">
              <?php 
              if ($_SESSION['user']['level'] == "admin") {
                echo $_SESSION['user']['nama'];
              }
              elseif ($_SESSION['user']['level'] == "user") {
                echo $_SESSION['user']['nama'];
              }
              ?>
            </h2>
            <p class="text-white mt-0 mb-4">Silahkan pilih menu "Assesment" untuk memulai menjawab.</p>
            <!-- <a href="?halaman=soal_user" class="btn btn-primary">MULAI</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--8">
