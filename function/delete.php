<?php
require_once("connection.php");
$nik = $_GET['nik'];
$sql = "DELETE FROM tb_datapenduduk where nik =$nik";
$query = mysqli_query($connect,$sql);
if($query){
echo "Berhasil Hapus data";
header("location:../views/tampilandata.php");	
}
else{
echo 'Gagal';
}
?>