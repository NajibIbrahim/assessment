    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body">
              <div class="col">
                <h2 class="mb-3 text-primary">EDIT AKUN</h2>
              </div>
              <?php
              include "../koneksi.php";
              $sql = $conn->query("SELECT * FROM akun WHERE id_akun='$_GET[id_akun]'");
              $row = $sql->fetch_assoc();

              ?>
              <form action="" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-alternative" value="<?php echo $row['nama']; ?>" name="nama" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-alternative" value="<?php echo $row['bagian']; ?>" name="bagian" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-alternative" value="<?php echo $row['username']; ?>" name="username" required>
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
                        <?php 
                        $get_level = $row['level'];
                        $sql = $conn->query("SELECT * FROM ket_level");
                        while ($data = $sql->fetch_assoc()) {
                         if ($data['level'] == $get_level) {
                          ?>
                          <option selected="" value="<?= $data['level']; ?>"><?= $data['level']; ?></option>
                          <?php
                        } else {
                          ?>
                          <option value="<?= $data['level']; ?>"><?= $data['level']; ?></option>
                          <?php                      
                        }
                      } 

                      ?>
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
    if (isset($_POST['simpan'])) {

      $nama     = $_POST['nama'];
      $bagian   = $_POST['bagian'];
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $level    = $_POST['level']; 

      $sql = $conn->query("UPDATE akun SET 
        nama      =  '$nama',
        bagian    =  '$bagian',
        username  =  '$username',
        password  =  '$password',
        level     =  '$level' WHERE id_akun='$_GET[id_akun]'");
      if ($sql) {

        ?>
        <script type="text/javascript">
          alert("Data Berhasil di Update"); document.location = '?halaman=dataakun';
        </script>
        <?php

      } else {

        ?>
        <script type="text/javascript">
          alert("Data Gagal di Update"); document.location = '?halaman=dataakun';
        </script>
        <?php

      }

    }
    ?>