<?php 
    session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Page d'inscription - Fonctionnaire</title>
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
    a{
      color: darkred;
      text-decoration: none;
    }
    .logo{
         width: 135px;
         height: 160px;
    }
    .sign{
      width: 250px;
         height: 250px;
    }
    .row-form{
      display: inline;
    }
    .erreur{
      color: red;
    }
  </style>
</head>
<body>

  <section class="Form my-4 mx-5">
    <div class="container">
      <div class="row no-gutters w-90 mx-auto">
        <div class="col-lg-4 px-5 py-3 ">
          <img src="img/logo.png" class="img-fluid sign" alt="admin">
          </div>

        <div class="col-lg-8 px-5 py-5">
          <img src="img/signup.jpg" class="logo py-3">
          <h4>Inscription des fonctionnaires</h4>
          <form method="post" action="signup.php" onsubmit="return checkPasse()">
            <div class="row ">

               <b class="erreur"><?php 

                if(isset($_SESSION["erreur"]))
                {
                  echo $_SESSION["erreur"];
                  unset($_SESSION["erreur"]);
                }



                ?></b>

                <div class="col-xl-6">
                <input type="text" class="form-control my-3 p-3" placeholder="Code fonctionnaire" name="codeF" required>
                
                <input type="password" class="form-control my-3 p-3" placeholder="Mot de passe" name="pass" required>
                </div>


                <div class="col-xl-6">
                                <input type="email" class="form-control my-3 p-3" placeholder="Email" name="email" required>
                                <input type="password" class="form-control my-3 p-3" placeholder="Confirmer le mot de passe" name="pass2" required>
                </div>
                



                  <div class="col-xl-6">
                <input type="submit" class="form-control my-3 p-3 btn1" value="Se connecter">
                </div>
                <div class="col-xl-6">
                <input type="reset" class="form-control my-3 p-3 btn2 " value="Réinitialisr">
                </div>

                  <a href="login_ad_fn.php" >Déjat avait un compte ?</a><br>
                
            
            </div>
          </form>
          
        </div>
        
      </div>
      
    </div>
    
  </section>


<script type="text/javascript">
  function checkPasse()
  {
    var p1=document.getElementsByTagName("input")[1].value;
    var p2=document.getElementsByTagName("input")[3].value;

    if(p1==p2)
      return true;
    else
    {
      alert("il s'agit pas de méme mot de passe");
      document.getElementsByTagName("input")[3].focus();
      return false;
    }
    
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>