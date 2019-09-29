   
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
                <h2 class="mb-0 text-primary">DATA SOAL</h2>
              </div>
              <div class="pull-right">
                <a href="?halaman=tambahsoal" class="btn btn-sm btn-success">TAMBAH SOAL</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush" id="example">
              <thead class="thead-light">
                <tr>
                  <th scope="col" width="20px">No Soal</th>
                  <th scope="col">Pertanyaan</th>
                  <th scope="col">Kategori</th>
                  <th width="30px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "../koneksi.php";
                if ($conn->connect_errno) {
                  echo die("Gagal Masuk Database: ".$conn->connect_error);
                }
                $mysql="SELECT * FROM bank_soal";
                $query= mysqli_query($conn,$mysql);
                while ($data=mysqli_fetch_array($query)) {

                  ?>
                  <tr>
                    <td><?php echo $data['no_soal'];?></td>
                    <td><?= substr($data['soal'], 0,50); ?> ...</td>
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
                    <td>
                      <a href="?halaman=lihatsoal&id=<?php echo $data['id'];?>" class="btn btn-sm btn-primary">LIHAT</a>
                      <a href="?halaman=editsoal&id=<?php echo $data['id'];?>" class="btn btn-sm btn-success">EDIT</a>
                      <a href="?halaman=hapussoal&id=<?php echo $data['id'];?>" class="btn btn-sm btn-danger">HAPUS</a>
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
