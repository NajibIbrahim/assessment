    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body">
              <div class="col">
                <h2 class="mb-3 text-primary">TAMBAH SOAL</h2>
              </div>
              <form action="" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-alternative" placeholder="Masukkan Nomor Soal" name="no_soal" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <!-- <label for="exampleFormControlSelect1">Example select</label> -->
                      <select class="form-control" name="kategori">
                        <option>- Pilih Kategori Soal -</option>
                        <option value="core">Core Competention</option>
                        <option value="managerial">Managerial Competention</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Masukkan Soal" class="form-control form-control-alternative" name="soal" required>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="text" placeholder="Masukkan Jawaban A" class="form-control form-control-alternative" name="a" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="number" min="1" max="5" placeholder="Point Jawaban A" class="form-control form-control-alternative" name="point-a" required>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="text" placeholder="Masukkan Jawaban B" class="form-control form-control-alternative" name="b" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="number" min="1" max="5" placeholder="Point Jawaban B" class="form-control form-control-alternative" name="point-b" required>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="text" placeholder="Masukkan Jawaban C" class="form-control form-control-alternative" name="c" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="number" min="1" max="5" placeholder="Point Jawaban C" class="form-control form-control-alternative" name="point-c" required>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="text" placeholder="Masukkan Jawaban D" class="form-control form-control-alternative" name="d" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="number" min="1" max="5" placeholder="Point Jawaban D" class="form-control form-control-alternative" name="point-d" required>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="text" placeholder="Masukkan Jawaban E" class="form-control form-control-alternative" name="e" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="number" min="1" max="5" placeholder="Point Jawaban E" class="form-control form-control-alternative" name="point-e" required>
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
        // die();

        $sql= "INSERT INTO `bank_soal`(`no_soal`,`soal`, `a`, `point-a`, `b`, `point-b`, `c`, `point-c`, `d`, `point-d`, `e`, `point-e`, `kategori`) 
        VALUES ('".$_POST['no_soal']."',
        '".$_POST['soal']."',
        '".$_POST['a']."',
        '".$_POST['point-a']."',
        '".$_POST['b']."',
        '".$_POST['point-b']."',
        '".$_POST['c']."',
        '".$_POST['point-c']."',
        '".$_POST['d']."',
        '".$_POST['point-d']."',
        '".$_POST['e']."',
        '".$_POST['point-e']."',
        '".$_POST['kategori']."')";

        $s1 = mysqli_query($conn,$sql);

        if($s1){
          ?>
          <script>alert("Alhamdulillah Berhasil Menyimpan Data"); document.location= '?halaman=datasoal';
        </script>
        <?php
      }
      else
      {
        ?>
        <script>alert("Gagal Menyimpan Data"); document.location= '?halaman=datasoal';
      </script>
      <?php

    }
  } ?> 