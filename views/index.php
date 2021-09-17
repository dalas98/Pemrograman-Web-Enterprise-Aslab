<!DOCTYPE html>
<html>
	<?php 
		require_once "../function/connection.php"; 
		session_start();
		if (!isset($_SESSION['username'])) {
		header('location:login.php');
		}
		require_once 'template/header.php';
	?>
	<title>Welcome</title>
	<style>
		/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 532px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	</style>
<body>
<div class="container-fluid text-center" style="margin-top:13px">    
  <div class="row content">
    <div class="col-sm-10 text-left">
      <h1>Welcome <?=$_SESSION['username']?></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-right">
  Powered By<a href="https://web.facebook.com/Hans.lnside" target="_blank"> HansJr</a>
</footer>

</body>
</html>