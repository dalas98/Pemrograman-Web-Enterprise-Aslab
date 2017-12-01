<?php 
require_once "../function/connection.php"; 
session_start();
if (!isset($_SESSION['username'])) {
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Data</title>
		<script src="additional/bootstrap/js/jquery.js"></script>
		<script src="additional/bootstrap/js/bootstrap.min.js"></script>
		<script src="additional/bootstrap/js/jquery.dataTables.min.js"></script>
		<script src="additional/bootstrap/js/dataTables.bootstrap.min.js"></script>
		<link href="additional/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="additional/bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
		<link href="additional/bootstrap/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li class="disabled"><a href="#">Home</a></li>
					<li class="active"><a href="tampilandata.php" >Lihat Data</a></li>
					<li class="disabled"><a href="#">About Me</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']?></a>
						<ul class="dropdown-menu">
							<li>
							</li>
							<li>
							</li>
						</ul>
					</li>
					<li><a href="../function/logout.php" onclick="return confirm('Apakah Kamu Yakin Ingin Keluar ?');" title="LogOut"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		</nav> 
		<div class="container" style="margin-top:60px">
			<div class="row">
				<table id="myTable" class="table table-stripped table-bordered table-hover" width="100%">
					<thead>
						<tr>
							<th>NIK</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>TTL</th>
							<th>Agama</th>
							<th>Status</th>
							<th>Warga</th>
							<td class="text-center"><a href='#myModal' class='btn btn-primary btn-sm' id='addData' data-toggle='modal' title="Tambah Data"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a> <span class="fa fa-cog"></span></td>
						</tr>
					</thead>
					<?php 
						$sql = "SELECT * FROM tb_datapenduduk";
						$query = mysqli_query($connect,$sql);
					?>
					<tbody>
						<?php while($data = mysqli_fetch_assoc($query)) : ?>
							<tr>
								<td><?php echo $data['nik']; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['alamat']; ?></td>
								<td><?php echo $data['tmptlahir']; ?>, <?php $ttt = $data['tgllahir']; echo date("d-M-Y", strtotime($ttt))?></td>
								<td><?php echo $data['agama']; ?></td>
								<td><?php echo $data['status']; ?></td>
								<td><?php echo $data['warga']; ?></td>
								<td class="text-center">
									<a href="" title="Edit Data" data-toggle="tooltip" class="disabled btn btn-default btn-s"><span class="fa fa-pencil"> Edit</span></a>
									<a href="../function/delete.php?nik=<?php echo $data['nik']; ?>" onclick="return confirm('Data <?php echo $data['nama']; ?> Akan Dihapus');" title="Hapus Data" data-toggle="tooltip" class="btn btn-danger btn-s"><span class="fa fa-trash"> Delete</span></a>
								</td>
							</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
		<script>
			$('#myTable').dataTable( {
			  "columnDefs": [
			    { "orderable": false, "targets": 7 },
			    { "orderable": false, "targets": 6 },
			    { "orderable": false, "targets": 5 },
			    { "orderable": false, "targets": 4 },
			    { "orderable": false, "targets": 3 },
			    { "orderable": false, "targets": 2 }
			  ]
			} );
			$(document).ready(function(){
			    $('[data-toggle="tooltip"]').tooltip();
			});
		</script>
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Tambah Data</h4>
					</div>
					<div class="modal-body">
						<div class="fetched-data">
							<form method="POST" action="../function/add.php">
								<div class="table-responsive">
									<table class="table">
										<tr>
											<td>NIK</td>
											<td>: <input type="text" name="nik" required=""></td>
										</tr><br>
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
											<td>: <select name="agama" required="">
													<option value="">--</option>
													<option value="Islam">Islam</option>	
													<option value="Kristen">Kristen</option>
													<option value="Katolik">Katolik</option>
													<option value="Hindu">Hindu</option>
													<option value="Buddha">Buddha</option>
													<option value="Kong Hu Cu">Kong Hu Cu</option>
												  </select></td>
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
											<td><input type="submit" name="add" value="Tambah Data" class="btn btn-success btn-sm"></td>
											<td></td>
										</tr>
									</table>
								</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
					</div>
		            </div>
			</div>
		</div>
	</body>
</html>
