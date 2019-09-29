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
                    <h2 class="mb-0 text-primary">DATA AKUN</h2>
                  </div>
                  <div class="pull-right">
                    <a href="?halaman=tambahakun" class="btn btn-sm btn-success">TAMBAH AKUN</a>
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush" id="example">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col" width="20px">No</th>
                      <th >Nama</th>
                      <th>Bagian</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Level</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include "koneksi.php";
                    if ($conn->connect_errno) {
                      echo die("Gagal Masuk Database: ".$conn->connect_error);
                    }
                    $mysql="SELECT * FROM akun";
                    $query= mysqli_query($conn,$mysql);
                    $nomor=1;
                    while ($data=mysqli_fetch_array($query)) {

                      ?>
                      <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $data['nama'];?></td>
                        <td><?php echo $data['bagian'];?></td>
                        <td><?php echo $data['username'];?></td>
                        <td><?php echo $data['password'];?></td>
                        <td><?php echo $data['level'];?></td>
                        <!-- <td><i class="fas fa-arrow-up text-success mr-3"></i> 46,53%</td> -->
                        <td>
                          <a href="?halaman=editakun&id_akun=<?php echo $data['id_akun'];?>" class="btn btn-sm btn-primary">EDIT</a>
                          <a href="?halaman=hapusakun?id_akun=<?php echo $data['id_akun'];?>" class="btn btn-sm btn-danger">HAPUS</a>
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

<!--       </div>
    </div>
     -->