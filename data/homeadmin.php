    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-0">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">


            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <span class="h1 font-weight-bold mb-0 text-danger">
                        <?php
                        include "../koneksi.php";
                        $sql = "SELECT * FROM bank_soal";
                        $query = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($query);
                        echo "$count <br/>";
                        ?>
                      </span>
                      <h3 class="card-title text-uppercase text-muted mb-0">Data Soal</h3>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-book"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <a href="?halaman=datasoal">
                      <span class="text-danger mr-2"><i class="fas fa-arrow-right"></i></span>
                      <span class="text-nowrap">Selengkapnya</span>
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <span class="h1 font-weight-bold mb-0 text-primary">
                        <?php
                        include "../koneksi.php";
                        $sql = "SELECT * FROM jawab_core";
                        $query = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($query);
                        echo "$count <br/>";
                        ?>
                      </span>
                      <h3 class="card-title text-uppercase text-muted mb-0">Data Pengisi</h3>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <a href="?halaman=datapengisi">
                      <span class="text-danger mr-2"><i class="fas fa-arrow-right"></i></span>
                      <span class="text-nowrap">Selengkapnya</span>
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <span class="h1 font-weight-bold mb-0 text-warning">
                        <?php
                        include "../koneksi.php";
                        $sql = "SELECT * FROM akun";
                        $query = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($query);
                        echo "$count <br/>";
                        ?>
                      </span>
                      <h3 class="card-title text-uppercase text-muted mb-0">Data Akun</h3>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <a href="?halaman=dataakun">
                      <i class="fas fa-arrow-right text-danger mr-2"></i>
                      <span class="text-nowrap">Selengkapnya</span>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12">
          <div class="card shadow">

            <div class="card-body">
              <!-- Chart -->
              <!-- <div class="chart"> -->
                <!-- <canvas id="chart-orders" class="chart-canvas"></canvas> -->
                <img src="../assets/img/back.jpg" width="100%">
                <!-- </div> -->
              </div>
            </div>
          </div>
        </div>
