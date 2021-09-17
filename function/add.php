<?php
require_once("connection.php");
if (isset($_POST['add'])) {
	
	$sql = $connect->prepare("INSERT INTO tb_datapenduduk(nik, nama, alamat, tmptlahir, tgllahir, agama, status, warga) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$sql->bind_param("ssssssss", $nik, $nama, $alamat, $tmptlahir, $tgllahir, $agama, $status, $warga);

	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tmptlahir = $_POST['tmptlahir'];
	$tgllahir = $_POST['tgllahir'];
	$agama = $_POST['agama'];
	$status = $_POST['status'];
	$warga = $_POST['warga'];
	
	$sql->execute();

	$sql->close();
	$connect->close();
	
	header("location:../views/tampilandata.php");
}
?>