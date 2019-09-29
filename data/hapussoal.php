<?php
include "../koneksi.php";

$id = $_GET['id'];
$sql= $conn->query("DELETE FROM bank_soal WHERE id='$id'");

if ($sql) {
  ?>
  <script type="text/javascript">
    alert("Hapus Data Berhasil!");
    document.location='?halaman=datasoal';
  </script>
  <?php
}
else  {
  echo "Gagal Hapus Data";
}
?>