<?php 

	$nom=$_POST["nom"];
   $prenom=$_POST["prenom"];

   $date=$_POST["date"];
   $email=$_POST["email"];
   $password=$_POST["password"];
   $con = mysqli_connect("localhost","root","","pfe");


   $newDate = date("Y-m-d", strtotime($date));


   $query2="insert into administrateur (nom,prenom,email,pasword,dateAmbauche) values ('".$nom."','".$prenom."','".$email."','".$password."','".$newDate."')";

   if(mysqli_query($con,$query2))
		{
			echo "<script type='text/javascript'>alert('administrateur ajouté avec succus!');</script>";
		    header('Refresh: 1; URL=espace_admin.php');
		}

		else
			echo $query2;




	

mysqli_close($con);


 ?>