<?php 



	if( isset($_POST["codeF"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["date"]) )
	{
		

		$codeF=$_POST["codeF"];
		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];
		$date=$_POST["date"];

		if(!empty($codeF) && !empty($nom) && !empty($prenom) &&!empty($date) )
		{
			$con = mysqli_connect("localhost","root","","pfe");
			$query="update fonctionnaire set nom='".$nom."',prenom='".$prenom."',dateAmbauche='".$date."' where codeF='".$codeF."'";
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
		header('Refresh: 1; URL=espace_admin.php');

	}
	else
	{
		echo "<script type='text/javascript'>alert('une erreur post  !');</script>";
	}
	





 ?>