<?php 
require_once "../function/connection.php"; 
session_start();
if (!isset($_SESSION['username'])) {
	header('location:login.php');
}
require_once 'template/header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	$agama    = array('--','Islam','Kristen','Katolik','Hindu','Buddha','Kong Hu Cu');
	$status   = array('--','Belum Kawin','Kawin');
	$warga    = array('--','WNI','WNA');
	$NIK 	= $_GET['nik'];
	$sql 	= "SELECT * FROM tb_datapenduduk WHERE nik=$_GET[nik]";
	$query 	= mysqli_query($connect,$sql);
	while($data = mysqli_fetch_assoc($query)) :
	?>
	<div class="modal-body">
						<div class="fetched-data">
						<h4 class="modal-title">Tambah Data</h4>
	<form method="POST" action="../function/update.php">
		<div class="table-responsive">
			<table class="table">
				<tr>
					<td width="13%">NIK</td>
					<td>: <input type="text" name="nik" value="<?php echo $data['nik']; ?>"></td>
				</tr><br>
				<tr>
					<td>Nama</td>
					<td>: <input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>: <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td>: <input type="text" name="tmptlahir" value="<?php echo $data['tmptlahir']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>: <input type="date" name="tgllahir" value="<?php echo $data['tgllahir']; ?>"></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>: <select name="agama">
							<?php
							foreach ($agama as $a){
							echo "<option value='$a' ";
							echo $data['agama']==$a?'selected="selected"':'';
							echo ">$a</option>";
							}
							?>
						  </select></td>
				</tr>
				<tr>
					<td>Status</td>
					<td>: <select name="status">
                            <?php
                            foreach ($status as $j){
                                echo "<option value='$j' ";
                                echo $data['status']==$j?'selected="selected"':'';
                                echo ">$j</option>";
                            }
                            ?>
                        </select>
					</td>
				</tr>
				<tr>
					<td>Kewarganegaraan</td>
					<td>: 
						<select name="warga">
							<?php
							foreach ($warga as $w){
							echo "<option value='$w' ";
							echo $data['warga']==$w?'selected="selected"':'';
							echo ">$w</option>";
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="update" value="Update Data" class="btn btn-success btn-sm">
						<a href="tampilandata.php" class="btn btn-danger btn-sm">Batal</a>
					</td>
					<td></td>
				</tr>
			</table>
		</div>
	</form>
<?php endwhile;?>
</div>
</div>
</body>
</html>