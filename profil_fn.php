<?php 
  //session_start();

  $con = mysqli_connect("localhost","root","","pfe");
  $query="select codeF,nom,prenom,dateAmbauche,type,email,grade,pass from fonctionnaire where codeF='".$_SESSION["id"]."'";
  $result = mysqli_query($con, $query);

  if ($row=mysqli_fetch_row($result)) {


  

 ?>


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
    .close5 {
      width: 40px;
      height: 40px;
      float: right;
      border: 0;
      border-radius: 0;
      background: transparent;
    }
  </style>

  <script type="text/javascript">
      function modifier(){
        document.getElementById('annuler').style.display='block';
        document.getElementById('modif_bt1').style.display='block';
        document.getElementById('modif_bt2').style.display='block';
        
        document.getElementById('email').disabled = false;
        
        document.getElementById('password').disabled = false;
        document.getElementById('password').placeholder = "Nouveau mot de passe";

      }
      function annuler(){
        document.getElementById('annuler').style.display='none';
        document.getElementById('modif_bt1').style.display='none';
        document.getElementById('modif_bt2').style.display='none';
        document.getElementById('email').disabled = true;
        document.getElementById('password').disabled = true;
        document.getElementById('password').placeholder = "*************";

      }
  </script>
</head>
<body>
  <section class="Form my-4 mx-5">
    <div class="container">
      <div class="row no-gutters w-60 mx-auto">
       
        <div class="col-lg-12 px-5 py-5">
          <button class="close5" ><img src="img/edit.png" onclick="modifier();" title="Modifier" class="close5"></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button class="close5" id="annuler" style="display: none;"><img src="img/cancel.png" onclick="annuler();" title="Annuler" class="close5"></button>
          <h4 style=""><b>Mon profile</b></h4>
          <form  action="modifier_fn.php"method="post">
            <div class="row ">


                <div class="col-xl-4">
                
                <input type="text" class="form-control my-3 p-3" placeholder="Nom" name="nom" required disabled="" value="<?php  echo $row[1] ; ?>">
                <input type="text" class="form-control my-3 p-3" placeholder="Date d'ambauche" name="date" onclick="this.type='date'" disabled="" required value="<?php  echo $row[3] ; ?>">
                </div>


                <div class="col-xl-4">
                                <input type="text" class="form-control my-3 p-3" placeholder="Prénom" name="prenom" disabled="" required value="<?php  echo $row[2] ; ?>">
                                <input type="text" class="form-control  my-3 p-3" name="type" id="type"  disabled="" value="<?php  if($row[4] == 'f'){echo 'Fonctionnaire';}else{echo 'Professeur';} ?>">
                </div>
                



                  <div class="col-xl-4">
                <input type="text" class="form-control my-3 p-3" placeholder="Code fonctionnaire" name="codeF" disabled="" required value="<?php  echo $row[0] ; ?>">
                 <input type="text" class="form-control my-3 p-3" name="grade_shell" id="grade_shell"  disabled="" value="<?php  echo $row[6] ; ?>">
                </div>
                



                  <div class="col-xl-6">
                <input type="email" class="form-control my-3 p-3" placeholder="Email" name="email" id="email" disabled="" required value="<?php  echo $row[5] ; ?>">
                              
                 
                </div>
                <div class="col-xl-6">
                
                            <input type="password" class="form-control my-3 p-3" placeholder="*************" name="password" id="password" disabled="" required value="<?php  echo $row[7] ; }?>">
                 
                </div>
                
               

                  <div class="col-xl-6" id="modif_bt1" style="display: none;">
                <input type="submit" class="form-control my-3 p-3 btn1" value="Mise à jour">
                </div>
                <div class="col-xl-6" id="modif_bt2" style="display: none;">
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