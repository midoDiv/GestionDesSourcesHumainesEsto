<!DOCTYPE html>
<html>
<head>
  <title></title>
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
    .row-form{
      display: inline;
    }
    .erreur{
      color: red;
    }
    .close {
      width: 20px;
      height: 20px;
      float: right;
      border: 0;
      background: transparent;
    }
  </style>

  <script type="text/javascript">
   
  </script>
</head>
<body>
  <section class="Form my-4 mx-5">
    <div class="container">
      <div class="row no-gutters w-60 mx-auto">
       
        <div class="col-lg-12 px-5 py-5">
          <button class="close" ><img src="img/fermer.png" onclick="document.getElementById('add_ad').style.display='none';" title="Fermer" class="close"></button> 
          <h4><b>Ajouter un administrateur</b></h4>
          <form  action="ajoutAdmin.php"method="post">
            <div class="row ">


                <div class="col-xl-4">
                
                <input type="text" class="form-control my-3 p-3" placeholder="Nom" name="nom" required>
                <input type="email" class="form-control my-3 p-3" placeholder="Email" name="email" required>
                </div>


                <div class="col-xl-4">
                                <input type="text" class="form-control my-3 p-3" placeholder="Prénom" name="prenom" required>
                                <input type="password" class="form-control my-3 p-3" placeholder="Mot de passe" name="password" required>
                               
                                
                </div>
                



                  <div class="col-xl-4">
                <input type="text" class="form-control my-3 p-3" placeholder="Date d'ambauche" name="date" onclick="this.type='date'" required>
                               
                 
                </div>
                
                <div class="col-xl-4">
                <input type="submit" class="form-control my-3 p-3 btn1" value="Créer le compte">
                </div>
                <div class="col-xl-4">
                <input type="reset" class="form-control my-3 p-3 btn2 " value="Réinitialisr">
                </div>
                
            
            </div>
            
          </form>
          
        </div>
        
      </div>
      
    </div>
    
  </section>

</body>
</html>