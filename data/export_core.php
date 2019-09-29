<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel</title>
</head>
<body>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		table{
			margin: 20px auto;
			border-collapse: collapse;
		}
		table th{
			background: #9FD3FF;
			border: 1px solid #8D8D8D;
			padding: 3px 8px;
		}
		/*table th,*/
		table td{
			border: 1px solid #8D8D8D;
			padding: 3px 8px;

		}
		a{
			background: blue;
			color: #fff;
			padding: 8px 10px;
			text-decoration: none;
			border-radius: 2px;
		}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pengisi.xls");
	?>

	<center>
		<h1>Data Pengisian Assessment Karyawan<br/>PT Perkebunan Nusantara IX Semarang</h1>
	</center>

	<table border="1">
		<tr>
			<th width="25px">No</th>
			<th>Nama</th>
			<th>Bagian</th>
			<th>Soal<br>1</th>
			<th>Soal<br>2</th>
			<th>Soal<br>3</th>
			<th>Soal<br>4</th>
			<th>Soal<br>5</th>
			<th>Soal<br>6</th>
			<th>Soal<br>7</th>
			<th>Soal<br>8</th>
			<th>Soal<br>9</th>
			<th>Soal<br>10</th>
			<th>Soal<br>11</th>
			<th>Soal<br>12</th>
			<th>Soal<br>13</th>
			<th>Soal<br>14</th>
			<th>Soal<br>15</th>
			<th>Soal<br>16</th>
			<th>Soal<br>17</th>
			<th>Soal<br>18</th>
			<th>Soal<br>19</th>
			<th>Soal<br>20</th>
			<th>Soal<br>21</th>
			<th>Soal<br>22</th>
			<th>Soal<br>23</th>
			<th>Soal<br>24</th>
			<th>Soal<br>25</th>
			<th>Soal<br>26</th>
			<th>Soal<br>27</th>
			<th>Soal<br>28</th>
			<th>Soal<br>29</th>
			<th>Soal<br>30</th>
			<th>Nilai<br>Achivement</th>
			<th>Rata-Rata<br>Achivement</th>
			<th>Level<br>Achivement</th>
			<th>Nilai<br>Organizational</th>
			<th>Rata-Rata<br>Organizational</th>
			<th>Level<br>Organizational</th>
			<th>Nilai<br>Team Work</th>
			<th>Rata-Rata<br>Team Work</th>
			<th>Level<br>Team Work</th>
			<th>Waktu Awal</th>
			<th>Waktu Akhir</th>
			<th>Durasi Menegerjakan</th>
		</tr>
		<?php
                // $conn = mysqli_connect("localhost", "root", "", "pondok");
		include "../koneksi.php";
		if ($conn->connect_errno) {
			echo die("Gagal Masuk Database: ".$conn->connect_error);
		}
		$mysql="SELECT * FROM jawab_core,akun WHERE akun.username = jawab_core.username";
		$query= mysqli_query($conn,$mysql);
		$nomor=1;
		while ($data=mysqli_fetch_array($query)) {

			?>
			<!-- <tbody> -->
				<tr>
					<td style="text-align: center;"><?php echo $nomor++; ?></td>
					<td><?php echo $data['nama'];?></td>
					<td><?php echo $data['bagian'];?></td>
					<td><?php echo $data['j1'];?></td>
					<td><?php echo $data['j2'];?></td>
					<td><?php echo $data['j3'];?></td>
					<td><?php echo $data['j4'];?></td>
					<td><?php echo $data['j5'];?></td>
					<td><?php echo $data['j6'];?></td>
					<td><?php echo $data['j7'];?></td>
					<td><?php echo $data['j8'];?></td>
					<td><?php echo $data['j9'];?></td>
					<td><?php echo $data['j10'];?></td>
					<td><?php echo $data['j11'];?></td>
					<td><?php echo $data['j12'];?></td>
					<td><?php echo $data['j13'];?></td>
					<td><?php echo $data['j14'];?></td>
					<td><?php echo $data['j15'];?></td>
					<td><?php echo $data['j16'];?></td>
					<td><?php echo $data['j17'];?></td>
					<td><?php echo $data['j18'];?></td>
					<td><?php echo $data['j19'];?></td>
					<td><?php echo $data['j20'];?></td>
					<td><?php echo $data['j21'];?></td>
					<td><?php echo $data['j22'];?></td>
					<td><?php echo $data['j23'];?></td>
					<td><?php echo $data['j24'];?></td>
					<td><?php echo $data['j25'];?></td>
					<td><?php echo $data['j26'];?></td>
					<td><?php echo $data['j27'];?></td>
					<td><?php echo $data['j28'];?></td>
					<td><?php echo $data['j29'];?></td>
					<td><?php echo $data['j30'];?></td>
					<td><?php echo $data['j1']+$data['j2']+$data['j3']+$data['j4']+$data['j5']+$data['j6']+$data['j7']+$data['j8']+$data['j9']+$data['j10'];?></td>
					<td><?php echo $data['achiv'];?></td>
					<td style="text-align: center;">
						<?php 
						$data2 = $data['achiv'];
						if($data2<='1'){
							echo "Level 1";
						}elseif($data2<='2'){
							echo "Level 2";
						}elseif($data2<='3'){
							echo "Level 3";
						}elseif($data2<='4'){
							echo "Level 4";
						}else{
							echo "Level 5";
						}
						?>
					</td>
					<td><?php echo $data['j11']+$data['j12']+$data['j13']+$data['j14']+$data['j15']+$data['j16']+$data['j17']+$data['j18']+$data['j19']+$data['j20'];?></td>
					<td><?php echo $data['organ'];?></td>
					<td style="text-align: center;">
						<?php 
						$data2 = $data['organ'];
						if($data2<='1'){
							echo "Level 1";
						}elseif($data2<='2'){
							echo "Level 2";
						}elseif($data2<='3'){
							echo "Level 3";
						}elseif($data2<='4'){
							echo "Level 4";
						}else{
							echo "Level 5";
						}
						?>								
					</td> 
					<td><?php echo $data['j21']+$data['j22']+$data['j23']+$data['j24']+$data['j25']+$data['j26']+$data['j27']+$data['j28']+$data['j29']+$data['j30'];?></td>
					<td><?php echo $data['teamwork'];?></td>
					<td style="text-align: center;">
						<?php 
						$data2 = $data['teamwork'];
						if($data2<='1'){
							echo "Level 1";
						}elseif($data2<='2'){
							echo "Level 2";
						}elseif($data2<='3'){
							echo "Level 3";
						}elseif($data2<='4'){
							echo "Level 4";
						}else{
							echo "Level 5";
						}
						?>
					</td>
					<td><?php echo $data['waktu_awal'];?></td>
					<td><?php echo $data['waktu_akhir'];?></td>
					<td><?php echo $data['s_detik'];?> detik <?php echo $data['s_menit'];?> menit <?php echo $data['s_jam'];?> jam</td>
				</tr>
				<?php

			}
			?>
		</table>
	</body>
	</html>