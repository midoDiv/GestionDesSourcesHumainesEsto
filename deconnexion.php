<?php 

	session_start();


	session_unset();



	session_destroy();

	header("Location:login_ad_fn.php");
	exit();




 ?>