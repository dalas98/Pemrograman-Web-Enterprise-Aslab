<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Tambah Data</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<form method="POST" action="../function/add.php">
			<table>
				<tr>
					<td>NIK</td>
					<td>: <input type="text" name="nik" required=""></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>: <input type="text" name="nama" required=""></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>: <input type="text" name="alamat" required=""></td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td>: <input type="text" name="tmptlahir" required=""></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>: <input type="date" name="tgllahir" required=""></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>: <input type="text" name="agama" required=""></td>
				</tr>
				<tr>
					<td>Status</td>
					<td>: 
						<select name="status" required="">
							<option value="">--</option>
							<option value="Belum Kawin">Belum Kawin</option>	
							<option value="Kawin">Kawin</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Kewarganegaraan</td>
					<td>: 
						<select name="warga" required="">
							<option value="">--</option>
							<option value="WNI">WNI</option>
							<option value="WNA">WNA</option>	
						</select>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="add" value="Tambah Data"></td>
					<td><a href="tampilandata.php" class="button">Batal</a></td>
				</tr>
			</table>
		</form>
	</body>
</html>