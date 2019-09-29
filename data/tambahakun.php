    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body">
              <div class="col">
                <h2 class="mb-3 text-primary">TAMBAH AKUN</h2>
              </div>
              <form action="" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-alternative" placeholder="Masukkan Nama Lengkap" name="nama" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-alternative" placeholder="Masukkan Bagian" name="bagian" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-alternative" placeholder="Masukkan NIK / Username" name="username" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="password" class="form-control form-control-alternative" placeholder="Masukkan Password" name="password" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <select class="form-control" name="level">
                        <option>- Pilih Level Akun -</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-2" name="simpan">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <?php
      include '../koneksi.php';
      if(isset($_POST['simpan'])){

        $password = md5($_POST['password']);

        $sql= "INSERT INTO `akun`(`nama`,`bagian`, `username`, `password`, `level`) 
        VALUES ('".$_POST['nama']."',
        '".$_POST['bagian']."',
        '".$_POST['username']."',
        '$password',
        '".$_POST['level']."')";

        $s1 = mysqli_query($conn,$sql);

        if($s1){
          ?>
          <script>alert("Alhamdulillah Berhasil Menambahkan Akun Baru"); document.location= '?halaman=dataakun';
        </script>
        <?php
      }
      else
      {
        ?>
        <script>alert("Gagal Membuat Akun Baru"); document.location= '?halaman=dataakun';
      </script>
      <?php

    }
  } ?> 