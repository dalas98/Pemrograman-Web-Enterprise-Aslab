<?php
require_once("connection.php");
$sql = $connect->prepare("DELETE FROM tb_datapenduduk where nik = ?");
$sql->bind_param("s",$nik);

$nik = $_GET['nik'];

$sql->execute();

$sql->close();
$connect->close();

if($sql){
    echo "Berhasil Hapus data";
    header("location:../views/tampilandata.php");	
}
else{
    echo 'Gagal';
}
