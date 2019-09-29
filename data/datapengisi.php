   
<head>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>

<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-0">

</div>
<!-- <div class="container-fluid mt--7"> -->
  <div class="container-fluid mt--9">
    <div class="row mt-2">
      <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="mb-0 text-primary">DATA PENGISI</h2>
              </div>
              <div class="pull-right">
                <a href="export_core.php" class="btn btn-sm btn-success">DOWNLOAD</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush" id="example">
              <thead class="thead-light">
                <tr>
                  <th scope="col" width="20px">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Bagian</th>
                  <th scope="col">Achievment</th>
                  <th scope="col">Organizational</th>
                  <th scope="col">Team Work</th>
                  <th scope="col">Durasi</th>
                  <th width="30px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "../koneksi.php";
                if ($conn->connect_errno) {
                  echo die("Gagal Masuk Database: ".$conn->connect_error);
                }
                $mysql="SELECT * FROM jawab_core,akun WHERE jawab_core.username =  akun.username";
                $query= mysqli_query($conn,$mysql);
                $nomor=1;
                while ($data=mysqli_fetch_array($query)) {

                  ?>
                  <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['bagian'];?></td>
                    <td>
                     <?php 
                     $data2 = $data['achiv'];
                     if($data2<='1'){
                      echo "Level 1";
                    }elseif($data2<='2'){
                      echo "Level 2";
                    }elseif($data2<='3'){
                      echo "Level 3";
                    }elseif($data2<='4'){
                      echo "Level 4";
                    }else{
                      echo "Level 5";
                    }
                    ?></td>
                    <td>
                      <?php 
                      $data2 = $data['organ'];
                      if($data2<='1'){
                        echo "Level 1";
                      }elseif($data2<='2'){
                        echo "Level 2";
                      }elseif($data2<='3'){
                        echo "Level 3";
                      }elseif($data2<='4'){
                        echo "Level 4";
                      }else{
                        echo "Level 5";
                      }
                      ?>
                    </td>
                    <td>
                      <?php 
                      $data2 = $data['teamwork'];
                      if($data2<='1'){
                        echo "Level 1";
                      }elseif($data2<='2'){
                        echo "Level 2";
                      }elseif($data2<='3'){
                        echo "Level 3";
                      }elseif($data2<='4'){
                        echo "Level 4";
                      }else{
                        echo "Level 5";
                      }
                      ?>
                    </td>
                    <td><?php echo $data['s_detik'];?> detik <?php echo $data['s_menit'];?> menit <?php echo $data['s_jam'];?> jam</td>
                    <!-- <td><i class="fas fa-arrow-up text-success mr-3"></i> 46,53%</td> -->
                    <td>
                      <a href="?halaman=lihatpengisi&username=<?php echo $data['username'];?>" class="btn btn-sm btn-primary">LIHAT</a>
                      <a href="?halaman=hapuspengisi&username=<?php echo $data['username'];?>" class="btn btn-sm btn-danger">HAPUS</a>
                    </td>
                  </tr>
                  <?php

                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
