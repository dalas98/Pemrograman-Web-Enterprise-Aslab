<?php 
require_once "function/connection.php"; 
session_start();
if (isset($_SESSION['username'])) {
	header('location:views/tampilandata.php');
}else{
	header('location:views/login.php');
}
?>