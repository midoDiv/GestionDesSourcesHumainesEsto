<?php

	$nom=$_POST["nom"];
   $prenom=$_POST["prenom"];

   $type=$_POST["type"];
   $grade_shell=$_POST["grade_shell"];
   $codeF=$_POST["codeF"];
   $date=$_POST["date"];


   $newDate = date("Y-m-d", strtotime($date));


   $con = mysqli_connect("localhost","root","","pfe");
   $query="select nom from fonctionnaire where codeF='".$codeF."'";
   if (!$con) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
	}

	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0)
	{
		echo "<script type='text/javascript'>alert('codeF déja existant ');</script>";
		header('Refresh: 1; URL=espace_admin.php');
	}
	else
	{

		
		$query2="insert into fonctionnaire (codeF,nom,prenom,dateAmbauche,grade,type) values ('".$codeF."','".$nom."','".$prenom."','".$newDate."','".$grade_shell."','".$type."')";

		if(mysqli_query($con,$query2))
		{
			echo "<script type='text/javascript'>alert('fonctionnaire ajouté avec succus!');</script>";
		    header('Refresh: 1; URL=espace_admin.php');
		}




	}


mysqli_close($con);



  ?>