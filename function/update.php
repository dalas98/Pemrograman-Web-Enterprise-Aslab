<?php
require_once("connection.php");
if (isset($_POST['update'])) {
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tmptlahir = $_POST['tmptlahir'];
$tgllahir = $_POST['tgllahir'];
$agama = $_POST['agama'];
$status = $_POST['status'];
$warga = $_POST['warga'];
$sql = "UPDATE tb_datapenduduk SET nik='$nik',nama='$nama',alamat='$alamat',tmptlahir='$tmptlahir',tgllahir='$tgllahir',agama='$agama',status='$status',warga='$warga' WHERE nik='$nik';";
$query = mysqli_query($connect,$sql);
if($query){
echo "Berhasil update data";	
header("location:../views/tampilandata.php");
}
else{
echo 'Gagal';
}
}
?>