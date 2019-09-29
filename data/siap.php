    <?php
    include 'koneksi.php';
    session_start();

    ?>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-0">

    </div>

    <div class="container-fluid mt--9">
      <div class="row">
        <div class="col-xl-12">
          <div class="card shadow">

            <?php 
            $query = $conn->query("SELECT * FROM akun,jawab_core WHERE akun.username = jawab_core.username and akun.username =".$_SESSION['user']['username']." and jawab_core.username=".$_SESSION['user']['username']."");
            $result = $query->num_rows;
            if($result > 0){
              ?>
              <br>
              <br>
              <div class="col-auto" style="text-align: center;">
                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                  <i class="fas fa-exclamation"></i>
                </div>
              </div>
              <div class="card-body">
                <h1 class="display-3 text-danger" style="text-align: center;"><b>MOHON MAAF</b></h1>
                <h3 style="text-align: center;">Anda Sudah Mengisi Assessment</h3>
              </div>
              <br>
              <?php
              
            }
            else{
              ?>

              <br>
              <br>
              <div class="col-auto" style="text-align: center;">
                <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                  <i class="fas fa-exclamation"></i>
                </div>
              </div>
              <div class="card-body">
                <form action="" method="POST">
                  <button class="btn btn-primary btn-lg btn-block" type="submit" name="siap"><b>KLIK SIAP</b></button>
                </form>
                <br>
                <h3 style="text-align: center;">Untuk Memulai Assessment</h3>

              </div>
              <?php
              include '../koneksi.php';
              if(isset($_POST['siap'])){

                $username = $_SESSION["user"]["username"];

                date_default_timezone_set('Asia/Jakarta');
                // $waktu_awal = strtotime();
                $waktu_awal = date("Y-m-d H:i:s");
                $_SESSION['waktu_awal'] =$waktu_awal;
                $sql= "INSERT INTO jawab_core(username, waktu_awal) VALUES ('$username','$waktu_awal')";

                $s1 = mysqli_query($conn,$sql);


                if($s1){
                  ?>
                  <script>document.location= 'index.php?halaman=soal_user&username=<?php echo $_SESSION['user']['username'];?>';
                </script>
                <?php
              }
              else
              {
                ?>
                <script>document.location= '';
              </script>
              <?php

            }
          } ?> 

          <br>

          <?php 

        } ?>
      </div>
    </div>
  </div>

