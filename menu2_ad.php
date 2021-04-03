<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta http-equiv="Cache-control" content="no-cache">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Espace Administrateur</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!--Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <style type="text/css">
    .add_btn{
          width: 30px;
          height: 30px;
          float: right;
          border: 0;
          background: transparent;
    }
    .close {
      width: 20px;
      height: 20px;
      float: right;
      border: 0;
      background: transparent;
    }
     .close_r {
      width: 20px;
      height: 20px;
      
      right: 20px;
      border: 0;
      background: transparent;
    }
    .table_r > tr{
            border-radius: 45px;
    }
  </style>
  <script type="text/javascript">
  	
        function affiche_rsla()
            {

              document.getElementById('search_a').style.display='block';
              document.getElementById('motrecherch').innerHTML=document.getElementById('chercher').value;
            }
            function affichea()
            {
              
              document.getElementById('search_a').style.display='none';
              document.getElementById('add_ad').style.display='block';
            }


  </script>
</head>
<body>

	  <!-- Search bar -->
        <div class="row my-3 p-3" style="background-color: rgb(219,226,226);">
           <div class="col-lg-11">
            <input id="chercher" type="search" class="form-control" placeholder="Chercher un administrateur par nom, prénom, email..." aria-label="Search" aria-describedby="search-addon" style="border-radius: 45px;" required />
          </div>

         <div class="col-lg-1">
            <a href="#" onclick="affiche_rsla();"><i class="bx bi-search" style="text-align: left;"></i></a>
          </div>
          
                 
        </div>
        <!-- End Search bar -->

        <!-- Search Results  -->
        <div>
          
        </div>
           <div class="search_a" id="search_a" style="background-color: white;border-radius: 20px;display: none;">
            <table class="table table-striped caption-top" style="">
            <caption><b>&nbsp;&nbsp;&nbsp;Vous cherchez "</b id="motrecherch"></b>"</b><button class="close" ><img src="img/fermer.png" onclick="document.getElementById('search_a').style.display='none';" title="Fermer" class="close_r"></button></h6></caption>

            <?php 

                $con = mysqli_connect("localhost","root","","pfe");

                $query="select codeF,nom,prenom,dateAmbauche,email,grade from fonctionnaire";

                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0)
                {
                 echo "<tr><th>ID administrateur</th><th>Nom</th><th>Prénom</th><th>Date d'ambauche</th><th>Echelle</th><th>Email</th</tr>";
                  while ($row=mysqli_fetch_row($result)) {?>
                    
            <tr>
                      <td><?php echo $row[0]; ?></td>
                      <td><?php echo $row[1]; ?></td>
                      <td><?php echo $row[2]; ?></td>
                      <td><?php echo $row[3]; ?></td>
                      
                      <td><?php echo $row[5]; ?></td>
                      <td><?php echo $row[4]; ?></td>
                      
            </tr>
            <?php
             }

                }
                else
                  echo "<tr><td>aucun administrateur a était trouver </td></tr>";

                mysqli_close($con);

             ?>
             </table>
            
             
           </div>
        <!-- End Search Results  -->


        <!-- Form add FN + Form Edit FN -->
        <div class="add_ad" id="add_ad" style="display: none;">
          <?php include ('add_ad.php'); ?>
        </div>
        <!-- END -->

        <!-- Liste FNS -->
      <div class="row">

        <div></div>

        <div class="col-lg-12">
          
          <div class="liste_ad ">
          
          <table class="table table-striped caption-top sm-4 ">
            <caption><b style="font-size: 22px;">Administrateurs inscrits</b><button class="add_btn" onclick="affichea();"><img src="img/add_fn_btn.png" onclick="affichea();" alt="" title="Ajouter un nouveau Administrateur" class="add_btn"></button></caption>

            <?php 

                $con = mysqli_connect("localhost","root","","pfe");

                $query="select id,nom,prenom,dateAmbauche,email from administrateur";

                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0)
                {
                  echo "<tr>
              <th>ID administrateur</th><th>Nom</th><th>Prénom</th><th>Date d'ambauche</th><th>Email</th></tr>";
                  while ($row=mysqli_fetch_row($result)) {?>
                    
            <tr>
                      <td><?php echo $row[0]; ?></td>
                      <td><?php echo $row[1]; ?></td>
                      <td><?php echo $row[2]; ?></td>
                      <td><?php echo $row[3]; ?></td>
                      <td><?php echo $row[4]; ?></td>
                      
                      
                      
            </tr>
            <?php
             }

                }
                else
                  echo "<tr><td>aucun admin est ajouté pour le moment </td></tr>";

                mysqli_close($con);

             ?>
                 

          </table>
          
        </div>

        </div>
        
      </div>

</body>
</html>