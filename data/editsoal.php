    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body">
              <div class="col">
                <h2 class="mb-3 text-primary">EDIT SOAL</h2>
              </div>
              <?php
              include "../koneksi.php";
              $sql = $conn->query("SELECT * FROM bank_soal WHERE id='$_GET[id]'");
              $row = $sql->fetch_assoc();

              ?>
              <form action="" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nomor Soal</label>
                      <input type="text" class="form-control form-control-alternative" value="<?php echo $row['no_soal']; ?>" name="no_soal" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Kategori Soal</label>
                      <select class="form-control" name="kategori">
                        <option>- Pilih Kategori Soal -</option>
                        <?php 
                        $get_kategori = $row['kategori'];
                        $sql = $conn->query("SELECT * FROM ket_kategori");
                        while ($data = $sql->fetch_assoc()) {
                         if ($data['kategori'] == $get_kategori) {
                          ?>
                          <option selected="" value="<?= $data['kategori']; ?>"><?= $data['ket']; ?></option>
                          <?php
                        } else {
                          ?>
                          <option value="<?= $data['kategori']; ?>"><?= $data['ket']; ?></option>
                          <?php                      
                        }
                      } 

                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Soal</label>
                    <input type="text" value="<?php echo $row['soal']; ?>" class="form-control form-control-alternative" name="soal" required>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <label>Jawaban A</label>
                    <input type="text" value="<?php echo $row['a']; ?>" class="form-control form-control-alternative" name="a" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Point A</label>
                    <input type="number" min="1" max="5" value="<?php echo $row['point_a']; ?>" class="form-control form-control-alternative" name="point_a" required>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <label>Jawaban B</label>
                    <input type="text" value="<?php echo $row['b']; ?>" class="form-control form-control-alternative" name="b" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Point B</label>
                    <input type="number" min="1" max="5" value="<?php echo $row['point_b']; ?>" class="form-control form-control-alternative" name="point_b" required>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <label>Jawaban C</label>
                    <input type="text" value="<?php echo $row['c']; ?>" class="form-control form-control-alternative" name="c" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Point C</label>
                    <input type="number" min="1" max="5" value="<?php echo $row['point_c']; ?>" class="form-control form-control-alternative" name="point_c" required>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <label>Jawaban D</label>
                    <input type="text" value="<?php echo $row['d']; ?>" class="form-control form-control-alternative" name="d" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Point D</label>
                    <input type="number" min="1" max="5" value="<?php echo $row['point_d']; ?>" class="form-control form-control-alternative" name="point_d" required>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <label>Jawaban E</label>
                    <input type="text" value="<?php echo $row['e']; ?>" class="form-control form-control-alternative" name="e" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Point E</label>
                    <input type="number" min="1" max="5" value="<?php echo $row['point_e']; ?>" class="form-control form-control-alternative" name="point_e" required>
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

      $no_soal   = $_POST['no_soal'];
      $soal      = $_POST['soal'];
      $a         = $_POST['a'];
      $point_a   = $_POST['point_a'];
      $b         = $_POST['b'];
      $point_b   = $_POST['point_b']; 
      $c         = $_POST['c'];
      $point_c   = $_POST['point_c']; 
      $d         = $_POST['d'];
      $point_d   = $_POST['point_d']; 
      $e         = $_POST['e'];
      $point_e   = $_POST['point_e']; 
      $kategori  = $_POST['kategori']; 

      $sql = $conn->query("UPDATE bank_soal SET 
        no_soal  =  '$no_soal',
        soal     =  '$soal',
        a        =  '$a',
        point_a  =  '$point_a',
        b        =  '$b',
        point_b  =  '$point_b',
        c        =  '$c',
        point_c  =  '$point_c',
        d        =  '$d',
        point_d  =  '$point_d',
        e        =  '$e',
        point_e  =  '$point_e',
        kategori =  '$kategori' WHERE id='$_GET[id]'");
      if ($sql) {

        ?>
        <script type="text/javascript">
          alert("Data Berhasil di Update"); document.location = '?halaman=datasoal';
        </script>
        <?php

      } else {

        ?>
        <script type="text/javascript">
          alert("Data Gagal di Update"); document.location = '?halaman=datasoal';
        </script>
        <?php

      }

    }
    ?>