<?php

		$codeF= $_GET["codeF"];
		



		 $con = mysqli_connect("localhost","root","","pfe");
        $query="delete from fonctionnaire where codeF ='".$codeF."'";


        if(mysqli_query($con, $query))
        	echo "<script type='text/javascript'>alert('fonctionnaire supprimé ');</script>";

        else
        	echo "<script type='text/javascript'>alert('une erreur c est produite  ');</script>";



		header('Refresh: 1; URL=espace_admin.php');

		

  ?>