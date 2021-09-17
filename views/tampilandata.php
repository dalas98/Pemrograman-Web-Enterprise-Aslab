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
		<style>
			footer {
		      background-color: #555;
		      color: white;
		      padding: 15px;
		    }
		    .row.content {height:530px;}
		</style>
	</head>
	<body>
		<?php require_once 'template/header.php' ?>
		<div class="container" style="margin-top:15px">
			<div class="row content">
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
							<td class="text-center"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" title="Tambah Data"><span class="glyphicon glyphicon-plus" ></span> Tambah Data</a> </button> <span class="fa fa-cog"></span><!-- <a href='#myModal' class='btn btn-primary btn-sm' data-toggle='modal' title="Tambah Data"><span class="glyphicon glyphicon-plus" ></span> Tambah Data</a> <span class="fa fa-cog"></span> --></td>
						</tr>
					</thead>
					<?php 
						$sql = $connect->query("SELECT * FROM tb_datapenduduk");
						
						$data = $sql->fetch_all(MYSQLI_ASSOC);
						
						$sql->close();
						$connect->close();
					?>
					<tbody>
						<?php foreach ($data as $key => $value) : ?>
							<tr>
								<td><?= $value['nik']; ?></td>
								<td><?= $value['nama']; ?></td>
								<td><?= $value['alamat']; ?></td>
								<td><?= $value['tmptlahir']; ?>, <?= date("d-M-Y", strtotime($value['tgllahir']))?></td>
								<td><?= $value['agama']; ?></td>
								<td><?= $value['status']; ?></td>
								<td><?= $value['warga']; ?></td>
								<td class="text-center">
									<a href="edit.php?nik=<?= $value['nik']; ?>" title="Edit Data" data-toggle="tooltip" class="btn btn-default btn-s"><span class="fa fa-pencil"> Edit</span></a>
									<a href="../function/delete.php?nik=<?= $value['nik']; ?>" onclick="return confirm('Data <?= $data['nama']; ?> Akan Dihapus');" title="Hapus Data" data-toggle="tooltip" class="btn btn-danger btn-s"><span class="fa fa-trash"> Delete</span></a>
								</td>
							</tr>
						<?php endforeach; ?>
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
		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<div class="fetched-data">
						<h4 class="modal-title">Tambah Data</h4>
							<?php require_once 'tambahdata.php';?>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					</div>
		            </div>
			</div>
		</div>
		<div class="modal fade" id="edit<?php echo $data['nik']; ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<div class="fetched-data">
						<h4 class="modal-title">Ubah Data</h4>
							<?php require_once'edit.php';?>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
					</div>
		            </div>
			</div>
		</div>
		<footer class="container-fluid text-right">
		  Powered By<a href="https://web.facebook.com/Hans.lnside" target="_blank"> HansJr</a>
		</footer>
	</body>
</html>
