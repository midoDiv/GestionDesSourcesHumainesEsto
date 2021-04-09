
<?php 
 
   session_start();



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Page de connexion</title>
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
    .btnp{
      color: darkred;
      text-decoration: none;
      border: none;
      background-color: transparent;
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
		.logo{
		     width: 135px;
		     height: 160px;
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
					<img src="img/login.png" class="logo py-3">
					<h4>CONNECTER A VOTRE ESPACE</h4>
					<form action="connexion.php" method="post" >
						<div class="form-row ">
							<div class="col-xl-9">
								<b class="erreur"><?php

									if(isset($_SESSION["error"]))
										echo $_SESSION["error"];  

									unset($_SESSION["error"]);



									?>



								 </b>
								 

								<select class="form-control form-select my-3 p-3" name="type">

							
                                                    <option value="1">Administrateur</option>
                                                    <option value="2">Fonctionnaire</option>
                                                  </select>
								<input type="email" class="form-control my-3 p-3" placeholder="L'adresse email" name="email" required>
						
					        </div>
					        <div class="col-xl-9">
								<input type="password" class="form-control my-3 p-3" placeholder="***********" name="password" required>
						
					        </div>
					        <div class="col-xl-9 my-3 ">
								<input type="submit" name="" value="Se connecter" class="btn1"> 
						
					        </div>
					        <button type="button" class="btnp" data-bs-toggle="popover" title="Instructions" data-bs-content="Contactez l'administrateur de système pour résoudre le problème">Mot de passe oublié ?</button>
					        <br>
                            <a href="signup_fn.php" >Créer un compte fonctionnaire?</a>

						
						</div>
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

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})

        
    </script>
</body>
</html>