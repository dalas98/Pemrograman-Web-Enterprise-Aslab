<script src="additional/bootstrap/js/jquery.js"></script>
<script src="additional/bootstrap/js/bootstrap.min.js"></script>
<script src="additional/bootstrap/js/jquery.dataTables.min.js"></script>
<script src="additional/bootstrap/js/dataTables.bootstrap.min.js"></script>
<link href="additional/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="additional/bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="additional/bootstrap/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<?php
require_once '../function/connection.php'; 
session_start();
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="tampilandata.php" >Lihat Data</a></li>
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