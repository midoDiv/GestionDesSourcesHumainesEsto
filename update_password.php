
<?php 
 
   session_start();



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Page de réstoration de mot de passe</title>
	<meta charset="utf-8">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;
		}
		body{
			background-color: rgb(219,226,226);

		}
		.row{
			border-radius: 30px;

			background-color: white
			
		}
		img{
			border-top-left-radius: 30px;
			border-bottom-left-radius: 30px;
		}
		a{
      color: darkred;
      text-decoration: none;
    }
		.btn1{
			border:none;
			outline: none;
			height: 50px;
			width: 100%;
			background-color: black;
			color: white;
			border-radius: 3px;
			font-weight: bold;
		}
		.btn1:hover{
			background-color: white;
			border:1px solid black;
			color: black;
		}
		.btn2{
      border:none;
      outline: none;
      height: 50px;
      width: 100%;
      background-color: darkgray;
      color: white;
      border-radius: 3px;
      font-weight: bold;
    }
    .btn2:hover{
      background-color: white;
      border:1px solid darkgray;
      color: black;
    }
		.logo{
		     width: 155px;
		     height: 180px;
		}
        .sign{
      width: 250px;
         height: 250px;
    }
    .erreur{
    	color: red;
    }
	</style>
</head>
<body>

	<section class="Form my-4 mx-5">
		<div class="container">
			<div class="row no-gutters w-75 mx-auto">
				<div class="col-lg-5 px-5 py-3 ">
					<img src="img/logo.png" class="img-fluid sign" alt="admin">
					
				</div>
				<div class="col-lg-7 px-5 py-5">
					<img src="img/password.png" class="logo py-3">
					<h4>RESTORATION DE MOT DE PASSE</h4>
					<form action="connexion.php" method="post" >
						
						
            <!--Check email -->
						<div id="check_email">
							
							<div class="form-row ">
							         <div class="col-xl-12">
              								<b class="erreur"><?php
              
              									if(isset($_SESSION["error"]))
              										echo $_SESSION["error"];  
              
              									unset($_SESSION["error"]);
              
              
              
              									?>
              
              
              
              								 </b>
              								 
              
              
              								<input type="email" class="form-control my-3 p-3" placeholder="Taper votre adresse email" name="email" required>
              						
              					        </div>
              					        
              					        <div class="col-xl-12 my-3 ">
              					        	<div class="row">
              					                 		<div class="col-xl-6">
              					                 		<input type="submit" name="" value="Suivant" class="btn1 my-1" onclick="check_em()">
              					                 	</div>
              					                 	<div class="col-xl-6">
              					                 		<button class="btn2 my-1" onclick="cancel();">Annuler</button>
              					                 	</div>
              					        	</div>
              								 
              						
              					        </div>
              					        

						
						        </div>
						        


						</div>

			<!--Check code -->

						<div id="check_code" style="display: none;">

							<div class="form-row ">
							<div class="col-xl-12">
								<b class="erreur"><?php
                                   
									if(isset($_SESSION["error"]))
										echo $_SESSION["error"];  

									unset($_SESSION["error"]);



									?>



								 </b>
								 

								
						    <input type="text" class="form-control my-3 p-3" placeholder="Taper le code envoyé a votre email" name="code_email" required>
						
					        </div>
					        
					        <div class="col-xl-12 my-3 ">
              					        	<div class="row">
              					                 		<div class="col-xl-6">
              					                 		<input type="submit" name="" value="Suivant" class="btn1 my-1" onclick="check_cd();">
              					                 	</div>
              					                 	<div class="col-xl-6">
              					                 		<button class="btn2 my-1" onclick="cancel();">Annuler</button>
              					                 	</div>
              					        	</div>
              								 
              						
              					        </div>
					        

						
						</div>
							

						</div>
         <!--Update Password -->

         <div id="up_psswrd" style="display: none;">

							<div class="form-row ">
							<div class="col-xl-12">
								<b class="erreur"><?php

									if(isset($_SESSION["error"]))
										echo $_SESSION["error"];  

									unset($_SESSION["error"]);



									?>



								 </b>
								 

								
						    <input type="password" class="form-control my-3 p-3" placeholder="Nouveau mot de passe" name="pass" required>
						    <input type="password" class="form-control my-3 p-3" placeholder="Confirmer le mot de passe" name="pass2" required>
						
					        </div>
					        
					        <div class="col-xl-12 my-3 ">
              					        	<div class="row">
              					                 		<div class="col-xl-6">
              					                 		<input type="submit" name="" value="Modifier" class="btn1 my-1" onclick="alert('success');">
              					                 	</div>
              					                 	<div class="col-xl-6">
              					                 		<button class="btn2 my-1" onclick="cancel();">Annuler</button>
              					                 	</div>
              					        	</div>
              								 
              						
              					        </div>
					        

						
						</div>
							

						</div>
<!--------------------------------------------------------------------------------------- -->

	</form>
					
				</div>
				
			</div>
			
		</div>
		
	</section>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 
 <script type="text/javascript">
         window.history.forward();
        function noBack() {
            window.history.forward();
        }
         
         

         function check_em(){
         	
         			
                       document.getElementById("check_email").style.display='none';
                        document.getElementById("check_code").style.display='block';
         }
         function check_cd(){
                       document.getElementById("check_code").style.display='none';
                       document.getElementById("up_psswrd").style.display='block';
                        
         }
        function cancel(){
        	window.location.href = "login_ad_fn.php";
        }
    </script>
</body>
</html>