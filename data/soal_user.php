    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-0">
      <!-- </div> -->
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-xs-12">
              <form role="form" action="" method="POST" style="text-align: justify;">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                   <div class="col">
                    <h2 class="card-title text-uppercase text-danger mb-0">Core Competency</h2>
                  </div>
                </div>
                <div class="card-body">

                  <?php
                  include "../koneksi.php";
                  if ($conn->connect_errno) {
                    echo die("Gagal Masuk Database: ".$conn->connect_error);
                  }
                  $mysql="SELECT * FROM bank_soal WHERE kategori='core'";
                  $query= mysqli_query($conn,$mysql);
                  $nomor=1;
                  while ($data=mysqli_fetch_array($query)) {

                    ?>
                    <div class="form-group">
                      <p class=""><b><b><?php echo $nomor++; ?>. </b><?php echo $data['soal'];?></b></p>
                      <div class="custom-control custom-radio mb-3">
                        <input name="j<?php echo $data['no_soal'];?>" class="custom-control-input" id="<?php echo $data['no_soal'];?>.1" type="radio" value="<?php echo $data['point-a'];?>" >
                        <label class="custom-control-label" for="<?php echo $data['no_soal'];?>.1"><?php echo $data['a'];?></label>
                      </div>
                      <div class="custom-control custom-radio mb-3">
                        <input name="j<?php echo $data['no_soal'];?>" class="custom-control-input" id="<?php echo $data['no_soal'];?>.2" type="radio" value="<?php echo $data['point-b'];?>">
                        <label class="custom-control-label" for="<?php echo $data['no_soal'];?>.2"><?php echo $data['b'];?></label>
                      </div>
                      <div class="custom-control custom-radio mb-3">
                        <input name="j<?php echo $data['no_soal'];?>" class="custom-control-input" id="<?php echo $data['no_soal'];?>.3" type="radio" value="<?php echo $data['point-c'];?>">
                        <label class="custom-control-label" for="<?php echo $data['no_soal'];?>.3"><?php echo $data['c'];?></label>
                      </div>
                      <div class="custom-control custom-radio mb-3">
                        <input name="j<?php echo $data['no_soal'];?>" class="custom-control-input" id="<?php echo $data['no_soal'];?>.4" type="radio" value="<?php echo $data['point-d'];?>">
                        <label class="custom-control-label" for="<?php echo $data['no_soal'];?>.4"><?php echo $data['d'];?></label>
                      </div>
                      <div class="custom-control custom-radio mb-3">
                        <input name="j<?php echo $data['no_soal'];?>" class="custom-control-input" id="<?php echo $data['no_soal'];?>.5" type="radio" value="<?php echo $data['point-e'];?>">
                        <label class="custom-control-label" for="<?php echo $data['no_soal'];?>.5"><?php echo $data['e'];?></label>
                      </div>
                    </div>
                    <!-- batas soal -->
                    <?php

                  }
                  ?>
                  <!-- batas soal -->
                  <button class="col-md-2 btn btn-primary" type="submit" name="simpan">Simpan</button>
                </div>
              </div><!-- card stats -->
            </form>
          </div>
        </div>
      </div>
    </div>
<!-- </div>
</div> -->




<?php
if (isset($_POST['simpan'])) {

  date_default_timezone_set('Asia/Jakarta');
  $waktu_awal = $_SESSION['waktu_awal'];
  $waktu_akhir = date("Y-m-d H:i:s");
  $selisih = strtotime($waktu_akhir)-strtotime($waktu_awal);
  $jam=$selisih/60/60;
  $menit=$selisih/60;
  $detik=$selisih%60;
  // echo round($jam)." jam : ";
  // echo round($menit)." menit : ";
  // echo $detik." detik ";
  // $lama = round($jam)." jam : "round($menit)." menit : "$detik." detik ";

  // die();
  $j1= $_POST['j1'];
  $j2= $_POST['j2'];
  $j3= $_POST['j3'];
  $j4= $_POST['j4'];
  $j5= $_POST['j5'];
  $j6= $_POST['j6'];
  $j7= $_POST['j7'];
  $j8= $_POST['j8'];
  $j9= $_POST['j9'];
  $j10= $_POST['j10'];
  $j11= $_POST['j11'];
  $j12= $_POST['j12'];
  $j13= $_POST['j13'];
  $j14= $_POST['j14'];
  $j15= $_POST['j15'];
  $j16= $_POST['j16'];
  $j17= $_POST['j17'];
  $j18= $_POST['j18'];
  $j19= $_POST['j19'];
  $j20= $_POST['j20'];
  $j21= $_POST['j21'];
  $j22= $_POST['j22'];
  $j23= $_POST['j23'];
  $j24= $_POST['j24'];
  $j25= $_POST['j25'];
  $j26= $_POST['j26'];
  $j27= $_POST['j27'];
  $j28= $_POST['j28'];
  $j29= $_POST['j29'];
  $j30= $_POST['j30'];
  $j30= $_POST['j30'];
  $achiv = ($j1+$j2+$j3+$j4+$j5+$j6+$j7+$j8+$j9+$j10)/10;
  $organ = ($j11+$j12+$j13+$j14+$j15+$j16+$j17+$j18+$j19+$j20)/10;
  $teamwork = ($j21+$j22+$j23+$j24+$j25+$j26+$j27+$j28+$j29+$j30)/10;

  $sql = $conn->query("UPDATE jawab_core SET 
    waktu_akhir =  '$waktu_akhir',
    j1  =  '$j1',
    j2  =  '$j2',
    j3  =  '$j3',
    j4  =  '$j4',
    j5  =  '$j5',
    j6  =  '$j6',
    j7  =  '$j7',
    j8  =  '$j8',
    j9  =  '$j9',
    j10  =  '$j10',
    j11  =  '$j11',
    j12  =  '$j12',
    j13  =  '$j13',
    j14  =  '$j14',
    j15  =  '$j15',
    j16  =  '$j16',
    j17  =  '$j17',
    j18  =  '$j18',
    j19  =  '$j19',
    j20  =  '$j20',
    j21  =  '$j21',
    j22  =  '$j22',
    j23  =  '$j23',
    j24  =  '$j24',
    j25  =  '$j25',
    j26  =  '$j26',
    j27  =  '$j27',
    j28  =  '$j28',
    j29  =  '$j29',
    j30  =  '$j30',
    achiv    = '$achiv',
    organ    = '$organ',
    teamwork = '$teamwork',
    s_detik  =  '$detik', 
    s_menit  =  '$menit', 
    s_jam  =  '$jam'  
    -- selisih  = '$lama'
    WHERE username='$_GET[username]'");

  if ($sql) {

    ?>
    <script type="text/javascript">
      alert("Assessment Selesai, Terima Kasih Telah Mengisi"); document.location = '?halaman=homeuser';
    </script>
    <?php

  } else {

    ?>
    <script type="text/javascript">
      alert("Gagal"); document.location = '?halaman=homeuser';
    </script>
    <?php

  }

}
?>