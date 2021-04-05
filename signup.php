<?php 


	if(isset($_POST["codeF"]) && isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["pass2"]))
	{
		session_start();
		 $codeF=$_POST["codeF"];
		 $email=$_POST["email"];
		 $pass=$_POST["pass"];
		 $pass2=$_POST["pass2"];
		 if(!empty($codeF)&& !empty($email)&& !empty($pass) && !empty($pass2))
		 {
		 	if($pass==$pass2)
		 	{
			 	 $con = mysqli_connect("localhost","root","","pfe");
			 	 $query1="select codeF from fonctionnaire where email='".$email."'";
			 	 $result1=mysqli_query($con,$query1);
			 	 if(mysqli_num_rows($result1) >0)
			 	 {
			 	 			echo "<script type='text/javascript'>alert('email déja utiliser par un autre utilisateur !');</script>";
					    	header('Refresh: 1; URL=signup_fn.php');

			 	 }
			 	 else
			 	 {

		   			 $query="select codeF,nom,prenom from fonctionnaire where codeF='".$codeF."' and email='Pas encore ajouté' and pass is null";

		   			 $result=mysqli_query($con,$query);

		   			 if(mysqli_num_rows($result) > 0)
		   		 	{
		   		 		$row=mysqli_fetch_row($result);
		   		 		$query="update fonctionnaire set email='".$email."',pass='".$pass."' where codeF='".$codeF."'";
		   		 		$result=mysqli_query($con,$query);
		   		 		if($result)
		   		 		{
		   		 				$_SESSION["id"]=$row[0];
		   		 				$_SESSION["nom"]=$row[1];
		   		 				$_SESSION["prenom"]=$row[2];
		   		 				echo "<script type='text/javascript'>alert('inscription  avec succus!');</script>";
					    		header('Refresh: 1; URL=espace_fonctionnaire.php');	
			   		 	}
			   		 	else
			   		 	{

			   		 		echo "<script type='text/javascript'>alert('une erreur c est produite réessayer !');</script>";
					    	header('Refresh: 1; URL=signup_fn.php');	

			   		 	}
			   		}
			   		else
			   		{
			   		 	 	$_SESSION["erreur"]="Code fonctionnaire invalide !";
			   		 		
					    	header('Refresh: 1; URL=signup_fn.php');
			   		}


			 	}

		 	}
		 	else{
		 		echo "<script type='text/javascript'>alert('il s agit pas de meme mot de passe confirmer votre mot de passe');</script>";
				header('Refresh: 1; URL=signup_fn.php');

		 	}

		 }

		  else{
			 	echo "<script type='text/javascript'>alert('les champs ne doivent pas etre vide !');</script>";
				header('Refresh: 1; URL=signup_fn.php');
			 }

		

	}





 ?>