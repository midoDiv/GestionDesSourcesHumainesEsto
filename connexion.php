<?php

	session_start();

   $email=$_POST["email"];
   $pass=$_POST["password"];

   $type=$_POST["type"];

   $con = mysqli_connect("localhost","root","","pfe");
   $query="";

  if(strval($type)=="1")
  	$query="select id from administrateur where email='".$email."' and pasword='".$pass."'";
  else
  	 $query="select codeF from ffonctionnaire where email='".$email."' and pass='".$pass."'";


  


   if (!$con) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
	}


	$result = mysqli_query($con, $query);


	if (mysqli_num_rows($result) > 0)
	{
	
		$row=mysqli_fetch_row($result);
		$_SESSION["id"]=$row[0];
		

		if(strval($type)==1)
			header("Location:espace_admin.php");
			
		else
		{
			header("Location:espace_fonctionnaire.php");

		}

        exit();

		


	}
	else
	{
		$_SESSION["error"]="Mot de passe ou email invalide !";
		header("Location:login_ad_fn.php");
	}







mysqli_close($con);






?>