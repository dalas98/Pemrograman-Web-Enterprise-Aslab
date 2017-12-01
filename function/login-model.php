<?php
require_once "../function/connection.php";
// session_start();
// $_SESSION['id'] = $_POST['id'];

// echo "Selamat Datang ".$_SESSION['id'];
	if (isset($_POST['login'])) {
		$username = $_POST['id'];
		$password = md5($_POST['password']);
		$role = $_POST['role'];
		$sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password' ";
		$query = mysqli_query($connect,$sql);
		$numRow = mysqli_num_rows($query);

		if ($numRow > 0) {
			session_start();
			$result = mysqli_fetch_assoc($query);
			$_SESSION['username']=$result['username'];
			header("location:../views/tampilandata.php");
		}else{
			echo "Password salah";
			echo "<meta http-equiv='Refresh' content='1; URL=../views/login.php'>";
		}
	}
?>