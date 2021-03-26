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
    function chech_type()
            {
              var select = document.getElementById("grade_shell");
               var length = select.options.length;
               for (i = length-1; i >= 0; i--) {
                 select.options[i] = null;
               }
               let type = document.getElementById('type').value;
              if (type == "p")
              {
                let pg = new Array('PA A','PA B','PA C','PA D','PH A','PH B','PH C','PH D','PES A','PES B','PES C','PES D');
                 var x = document.getElementById("grade_shell");
                 
                 for(i=0; i<pg.length;i++)
                 {
                  var option = document.createElement("option");
                  option.text = pg[i];
                  option.value=pg[i];

                  x.add(option, x[i]);
                 }
                 
              }
              else{
                let pg = new Array('échelle 8','échelle 9','échelle 10','échelle 11');
                 var x = document.getElementById("grade_shell");
                 
                 for(i=0; i<pg.length;i++)
                 {
                  var option = document.createElement("option");
                  option.text = pg[i];
                  option.value=pg[i];

                  x.add(option, x[i]);
                 }
              }
            }
  </script>
</head>
<body>
  <section class="Form my-4 mx-5">
    <div class="container">
      <div class="row no-gutters w-60 mx-auto">
       
        <div class="col-lg-12 px-5 py-5">
          <button class="close" ><img src="img/fermer.png" onclick="document.getElementById('add_fn').style.display='none';" class="close"></button> 
          <h4><b>Ajout d'un fonctionnaire</b></h4>
          <form  action="ajoutFonctionnaire.php"method="post">
            <div class="row ">


                <div class="col-xl-4">
                
                <input type="text" class="form-control my-3 p-3" placeholder="Nom" name="nom" required>
                <input type="text" class="form-control my-3 p-3" placeholder="Date d'ambauche" name="date" onclick="this.type='date'" required>
                </div>


                <div class="col-xl-4">
                                <input type="text" class="form-control my-3 p-3" placeholder="Prénom" name="prenom" required>
                                <select class="form-control form-select my-3 p-3" name="type" id="type" onmouseout="chech_type();">

              
                                                    <option value="p">Professeur</option>
                                                    <option value="f">Fonctionnaire</option>
                                                  </select>
                                
                </div>
                



                  <div class="col-xl-4">
                <input type="text" class="form-control my-3 p-3" placeholder="Code fonctionnaire" name="codeF" required>
                 <select class="form-control form-select my-3 p-3" name="grade_shell" id="grade_shell">
                            <option value="PA A">PA A</option><option value="PA B">PA B</option><option value="PA C">PA C</option><option value="PA D">PA D</option>
                            <option value="PH A">PH A</option><option value="PH B">PH B</option><option value="PH C">PH C</option><option value="PH D">PH D</option>
                            <option value="PES A">PES A</option><option value="PES B">PES B</option><option value="PES C">PES C</option><option value="PES D"> PES D</option>
                 </select>
                </div>
                
                <div class="col-xl-4">
                <input type="submit" class="form-control my-3 p-3 btn1" value="Créer le compte">
                </div>
                <div class="col-xl-4">
                <input type="reset" class="form-control my-3 p-3 btn2 " value="Réinitialisr" onclick="chech_type();">
                </div>
                
            
            </div>
            
          </form>
          
        </div>
        
      </div>
      
    </div>
    
  </section>

</body>
</html>