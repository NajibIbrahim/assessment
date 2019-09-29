<?php
include "../koneksi.php";
$sql = $conn->query("SELECT * FROM bank_soal  WHERE id='$_GET[id]'");
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
                <h2 class="mb-0 text-primary">Lihat Data Soal</h2>
              </div>

            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th width="50px">No Soal</th>
                  <td><?php echo $data['no_soal'];?></td>
                </tr>
                <tr>
                  <th width="50px">Soal</th>
                  <td><?php echo $data['soal'];?></td>
                </tr>
                <tr>
                  <th width="50px">Jawaban A</th>
                  <td><?php echo $data['a'];?></td>
                </tr>
                <tr>
                  <th width="50px">Point A</th>
                  <td><?php echo $data['point_a'];?></td>
                </tr>
                <tr>
                  <th width="50px">Jawaban A</th>
                  <td><?php echo $data['b'];?></td>
                </tr>
                <tr>
                  <th width="50px">Point B</th>
                  <td><?php echo $data['point_b'];?></td>
                </tr>
                <tr>
                  <th width="50px">Jawaban A</th>
                  <td><?php echo $data['c'];?></td>
                </tr>
                <tr>
                  <th width="50px">Point C</th>
                  <td><?php echo $data['point_c'];?></td>
                </tr>
                <tr>
                  <th width="50px">Jawaban D</th>
                  <td><?php echo $data['d'];?></td>
                </tr>
                <tr>
                  <th width="50px">Point D</th>
                  <td><?php echo $data['point_d'];?></td>
                </tr>
                <tr>
                  <th width="50px">Jawaban E</th>
                  <td><?php echo $data['e'];?></td>
                </tr>
                <tr>
                  <th width="50px">Point E</th>
                  <td><?php echo $data['point_e'];?></td>
                </tr>
                <tr>
                  <th width="50px">Kategori</th>
                  <td>
                   <?php 
                   $data2 = $data['kategori'];
                   if($data2=='core'){
                    echo "Core Competention";
                  }else{
                    echo "Managerial Competention";
                  }
                  ?>
                </td>
              </tr>  
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
