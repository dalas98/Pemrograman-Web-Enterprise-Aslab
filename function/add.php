<?php
require_once("connection.php");
if (isset($_POST['add'])) {
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tmptlahir = $_POST['tmptlahir'];
	$tgllahir = $_POST['tgllahir'];
	$agama = $_POST['agama'];
	$status = $_POST['status'];
	$warga = $_POST['warga'];

	$sql = "INSERT INTO tb_datapenduduk(nik, nama, alamat, tmptlahir, tgllahir, agama, status, warga) VALUES('$nik','$nama','$alamat','$tmptlahir','$tgllahir','$agama','$status','$warga')";
	$query = mysqli_query($connect,$sql);
	header("location:../views/tampilandata.php");
}
?>