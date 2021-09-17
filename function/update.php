<?php
require_once("connection.php");

if (isset($_POST['update'])) {
    $sql = $connect->prepare("UPDATE tb_datapenduduk SET nik = ?, nama = ?, alamat = ?, tmptlahir = ?, tgllahir = ?, agama = ?, status = ?, warga = ?  WHERE nik = ?");
    $sql->bind_param("sssssssss", $nik, $nama, $alamat, $tmptlahir, $tgllahir, $agama, $status, $warga, $nik);

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmptlahir = $_POST['tmptlahir'];
    $tgllahir = $_POST['tgllahir'];
    $agama = $_POST['agama'];
    $status = $_POST['status'];
    $warga = $_POST['warga'];

    $sql->execute();
    $error = $sql->error;

    $sql->close();
    $connect->close();

    if(!$error){
        echo "Berhasil update data";	
        header("location:../views/tampilandata.php");
    }
    else{
        echo 'Gagal';
    }
}
