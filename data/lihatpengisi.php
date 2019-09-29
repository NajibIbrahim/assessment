<?php
include "../koneksi.php";
$sql = $conn->query("SELECT * FROM jawab_core join akun using(username)  WHERE username='$_GET[username]'");
$data = $sql->fetch_assoc();

?>
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
                <h2 class="mb-0 text-primary">Data Pengisi</h2>
              </div>

            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th width="50px">Nama</th>
                  <td><?php echo $data['nama'];?></td>
                </tr>
                <tr>
                  <th>Bagian</th>
                  <td><?php echo $data['bagian'];?></td>
                </tr>
                <tr>
                  <th>Jawaban 1 | 2 | 3 | 4 | 5</th>
                  <td><?php echo $data['j1'];?> | <?php echo $data['j2'];?> | <?php echo $data['j3'];?> | <?php echo $data['j4'];?> | <?php echo $data['j5'];?></td>
                </tr>
                <tr>
                  <th>Jawaban 6 | 7 | 8 | 9 | 10</th>
                  <td><?php echo $data['j6'];?> | <?php echo $data['j7'];?> | <?php echo $data['j8'];?> | <?php echo $data['j9'];?> | <?php echo $data['j10'];?></td>
                </tr>
                <tr>
                  <th>Jawaban 11 | 12 | 13 | 14 | 15</th>
                  <td><?php echo $data['j11'];?> | <?php echo $data['j12'];?> | <?php echo $data['j13'];?> | <?php echo $data['j14'];?> | <?php echo $data['j15'];?></td>
                </tr>
                <tr>
                  <th>Jawaban 16 | 17 | 18 | 19 | 20</th>
                  <td><?php echo $data['j16'];?> | <?php echo $data['j17'];?> | <?php echo $data['j18'];?> | <?php echo $data['j19'];?> | <?php echo $data['j20'];?></td>
                </tr>
                <tr>
                  <th>Jawaban 21 | 22 | 23 | 24 | 25</th>
                  <td><?php echo $data['j21'];?> | <?php echo $data['j22'];?> | <?php echo $data['j23'];?> | <?php echo $data['j24'];?> | <?php echo $data['j25'];?></td>
                </tr>
                <tr>
                  <th>Jawaban 26 | 27 | 28 | 29 | 30</th>
                  <td><?php echo $data['j26'];?> | <?php echo $data['j27'];?> | <?php echo $data['j28'];?> | <?php echo $data['j29'];?> | <?php echo $data['j30'];?></td>
                </tr>
                <tr>
                  <th>Total Achivement</th>
                  <td><?php echo $data['j1']+$data['j2']+$data['j3']+$data['j4']+$data['j5']+$data['j6']+$data['j7']+$data['j8']+$data['j9']+$data['j10']; ?></td>
                </tr>
                <tr>
                  <th>Rata-Rata Achivement</th>
                  <td><?php echo $data['achiv']; ?></td>
                </tr>
                <tr>
                  <th>Level Achivement</th>
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
                    ?>
                  </td>
                </tr>
                <tr>
                  <th>Total Organization</th>
                  <td><?php echo $data['j11']+$data['j12']+$data['j13']+$data['j14']+$data['j15']+$data['j16']+$data['j17']+$data['j18']+$data['j19']+$data['j20']; ?></td>
                </tr>
                <tr>
                  <th>Rata-Rata Organization</th>
                  <td><?php echo $data['organ']; ?></td>
                </tr>
                <tr>
                  <th>Level Organization</th>
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
                </tr>
                <tr>
                  <th>Total Team Work</th>
                  <td><?php echo $data['j21']+$data['j22']+$data['j23']+$data['j24']+$data['j25']+$data['j26']+$data['j27']+$data['j28']+$data['j29']+$data['j30']; ?></td>
                </tr>
                <tr>
                  <th>Rata-Rata Team Work</th>
                  <td><?php echo $data['teamwork']; ?></td>
                </tr>
                <tr>
                  <th>Level Team Work</th>
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
                </tr>
                <tr>
                  <th>Waktu Awal</th>
                  <td><?php echo $data['waktu_awal']; ?></td>
                </tr>
                <tr>
                  <th>Waktu Akhir</th>
                  <td><?php echo $data['waktu_akhir']; ?></td>
                </tr>
                <tr>
                  <th>Durasi Mengerjakan</th>
                  <!-- <td><?php echo $data['s_jam']; ?> jam <?php echo $data['s_menit']; ?> menit <?php echo $data['s_detik']; ?> detik</td> -->
                  <td><?php echo $data['s_detik']; ?> detik <?php echo $data['s_menit']; ?> menit <?php echo $data['s_jam']; ?> jam</td>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
