<?php 
require_once "function/connection.php"; 
session_start();
if (isset($_SESSION['username'])) {
	header('location:views/index.php');
}else{
	header('location:views/login.php');
}
?>