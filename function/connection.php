<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$db = "db_webenterprise";

	$connect = mysqli_connect($hostname,$username,$password,$db);
	// if (!$connect) {
	// 	echo "failed".mysqli_error($koneksi);
	// }else{
	// 	echo "Success";
	// }
?>