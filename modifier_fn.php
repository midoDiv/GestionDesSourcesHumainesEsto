<?php 
	session_start();

	if(isset($_POST["email"]) && isset($_POST["password"]))
	{
		$email=$_POST["email"];
		$pass=$_POST["password"];

		if(!empty($email) && !empty($pass))
		{
			$con = mysqli_connect("localhost","root","","pfe");
			$query="update fonctionnaire set email='".$email."',pass='".$pass."' where codeF='".$_SESSION["id"]."'";

			if(mysqli_query($con, $query))
			{
				echo "<script type='text/javascript'>alert('utilisateur modifier avec succes !');</script>";
				
			}
			else
			{
				echo "<script type='text/javascript'>alert('une erreur s est produite  !');</script>";
			}
		}
		else{
			echo "<script type='text/javascript'>alert('les champs ne doivent pas etre vide !');</script>";

		}


		header('Refresh: 1; URL=espace_fonctionnaire.php');

	}


 ?>