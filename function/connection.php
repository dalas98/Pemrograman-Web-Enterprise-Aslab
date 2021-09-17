<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$hostname = "mysql";
$username = "root";
$password = "root";
$db = "db_webenterprise";

$connect = new mysqli($hostname,$username,$password,$db);
