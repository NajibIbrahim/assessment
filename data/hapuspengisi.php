<?php
include "../koneksi.php";

$username = $_GET['username'];
$sql= $conn->query("DELETE FROM jawab_core WHERE username='$username'");

if ($sql) {
  ?>
  <script type="text/javascript">
    alert("Hapus Data Berhasil!");
    document.location='?halaman=datapengisi';
  </script>
  <?php
}
else  {
  echo "Gagal Hapus Data";
}
?>