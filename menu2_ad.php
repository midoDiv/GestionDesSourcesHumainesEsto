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
  	
       
            function affichea()
            {
              

              document.getElementById('add_ad').style.display='block';
            }


  </script>
</head>
<body>

	  
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