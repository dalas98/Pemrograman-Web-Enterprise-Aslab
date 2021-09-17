<?php
require_once "../function/connection.php";

if (isset($_POST['login'])) {
	$sql = $connect->prepare("SELECT * FROM tb_user WHERE username = ?  AND password= ? ");
	$sql->bind_param("ss", $username, $password);

	$username = $_POST['id'];
	$password = md5($_POST['password']);

	$sql->execute();

	$result = $sql->get_result()->fetch_assoc();

	$sql->close();
	$connect->close();

	if (!empty($result)) {
		session_start();
		$_SESSION['username']=$result['username'];
		header("location:../views/index.php");
	}else{
		echo "Password salah";
		echo "<meta http-equiv='Refresh' content='1; URL=../views/login.php'>";
	}
}
