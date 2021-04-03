<?php 
	session_start();
	$con = mysqli_connect("localhost","root","","pfe");
	if( isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["prenom"]) && isset($_POST["date"]) && isset($_POST["password"]))
	{

		$email=$_POST["email"];
		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];
		$date=$_POST["date"];
		$pass=$_POST["password"];
		if(!empty($email) && !empty($nom) && !empty($prenom) &&!empty($date) &&!empty($pass) )
		{
			$query="update administrateur set nom='".$nom."',prenom='".$prenom."',email='".$email."',pasword='".$pass."',dateAmbauche='".$date."' where id=".$_SESSION["id"];
		  $result = mysqli_query($con, $query);
		  if($result)
		  {
		  	echo "<script type='text/javascript'>alert('utilisateur modifier avec succes !');</script>";

	  		}
	  		else
	  			echo "<script type='text/javascript'>alert('une erreur s est produite  !');</script>";
		}
		else
			echo "<script type='text/javascript'>alert('les champs ne doivent pas etre vide !');</script>";


		header('Refresh: 1; URL=espace_admin.php');

		
	}
  	



 ?>