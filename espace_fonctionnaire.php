<?php 


session_start();



 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Cache-control" content="no-cache">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Espace Fonctionnaire</title>
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
    /*window.addEventListener('load', function() {
                                                          document.write('<div class="toast" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"><img src="..." class="rounded me-2" alt="..."><strong class="me-auto">Bootstrap</strong><small>11 mins ago</small><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button</div><div class="toast-body">Hello, world! This is a toast message.</div></div>');
                                                        });*/
           function go_to_fn(){
                       //menu
                       var element1 = document.getElementById("men1");
                       element1.classList.add("active");
                       var element2 = document.getElementById("men2");
                       element2.classList.remove("active");
                       var element3 = document.getElementById("men3");
                       element3.classList.remove("active");
                       document.getElementById("repert").innerHTML ="Fonctionnaires" ;
                       //inner
                       document.getElementById("Profil_page").style.display='none';
                       document.getElementById("Administrateurs_page").style.display='none';
                        document.getElementById("Fonctionnaires_page").style.display='block';

                     
           }           

           function go_to_ad(){
                
                       var element1 = document.getElementById("men1");
                       element1.classList.remove("active");
                       var element2 = document.getElementById("men2");
                       element2.classList.add("active");
                       var element3 = document.getElementById("men3");
                       element3.classList.remove("active");
                       document.getElementById("repert").innerHTML ="Grade" ;
                      
                       //inner
                       document.getElementById("Profil_page").style.display='none';
                       document.getElementById("Fonctionnaires_page").style.display='none';
                       document.getElementById("Administrateurs_page").style.display='block';
                      
                     
           }

           function go_to_pr(){
                
                        var element1 = document.getElementById("men1");
                       element1.classList.remove("active");
                       var element2 = document.getElementById("men2");
                       element2.classList.remove("active");
                       var element3 = document.getElementById("men3");
                       element3.classList.add("active");
                       document.getElementById("repert").innerHTML ="Profil" ;

                       //inner
                       document.getElementById("Fonctionnaires_page").style.display='none';
                       document.getElementById("Administrateurs_page").style.display='none';
                       document.getElementById("Profil_page").style.display='block';

                     
           }


            





  </script>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="img/signup.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="espace_fonctionnaire.php"><?php  

              if(isset($_SESSION["nom"]) && isset($_SESSION["prenom"]))
                echo $_SESSION["nom"]." ".$_SESSION["prenom"];



         ?></a></h1>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" onclick="go_to_fn();" class="nav-link scrollto active" id="men1"><i class="bx bi-people"></i> <span>Fonctionnaires</span></a></li>
          <li><a href="#about"  onclick="go_to_ad();" class="nav-link scrollto" id="men2"><i class="bx bi-graph-up "></i> <span>Mon grade</span></a></li>
          <li><a href="#resume" onclick="go_to_pr();" class="nav-link scrollto" id="men3"><i class="bi bi-person-lines-fill"></i> <span>Profil</span></a></li>
          
          <li><a href="deconnexion.php" class="nav-link scrollto"><i class="bx bi-box-arrow-in-left"></i> <span>Deconnexion</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Espace Fonctionnaire</h2>
          <ol>
            <li><a href="espace_admin.php">Fonctionnaire</a></li>
            <li id="repert">Fonctionnaires</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<br>
    <section class="inner-page">
      <div class="container">

        <!-- __________________________________________Fonctionnaire page__________________________________________________ -->

        <div class="Fonctionnaires_page" id="Fonctionnaires_page">
                  
        <!-- Form add FN + Form Edit FN -->
        
        <!-- END -->

        <!-- Liste FNS -->
      <div class="row">

        <div></div>

        <div class="col-lg-12">
          
          <div class="liste_fn ">
          
          <table class="table table-striped caption-top sm-4 ">
            <caption><b style="font-size: 22px;">Fonctionnaires inscrits</b></caption>

            <?php 

                $con = mysqli_connect("localhost","root","","pfe");

                $query="select codeF,nom,prenom,dateAmbauche,type,email,grade from fonctionnaire";

                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0)
                {
                  echo "<tr>
              <th>Nom</th><th>Prénom</th><th>Type</th><th>Email</th></tr>";
                  while ($row=mysqli_fetch_row($result)) {?>
                    
            <tr>
                     
                      <td><?php echo $row[1]; ?></td>
                      <td><?php echo $row[2]; ?></td>
                   
                      <td><?php if($row[4] == 'f'){echo 'Fonctionnaire';}else{echo 'Professeur';} ?></td>
                  
                      <td><?php echo $row[5]; ?></td>
            </tr>
            <?php
             }

                }
                else
                  echo "<tr><td>aucun fonctionnaire est ajouté pour le moment </td></tr>";

                mysqli_close($con);

             ?>
                 

          </table>
          
        </div>

        </div>
        
      </div>
        
        <!--End Liste FNS -->
        </div>


        <!-- __________________________________________Grade page__________________________________________________ -->
      <div class="Administrateurs_page" id="Administrateurs_page" style="display: none;">
        
      <?php 

          $con = mysqli_connect("localhost","root","","pfe");
          $query="select type from fonctionnaire where codeF='".$_SESSION["id"]."'";
          $result = mysqli_query($con, $query);
           
           if ($row=mysqli_fetch_row($result)) {
              if($row[0]=="p")
                include ('grade_pr.php');
              else
                include ('grade_fn.php'); 
           }

           mysqli_close($con);



      
      ?>
        
        <!--End Liste adm -->
       </div>

           <!-- __________________________________________Profil page__________________________________________________ -->
     <div id="Profil_page" class="Profil_page" style="display: none;">

       <?php include ('profil_fn.php'); ?>

     </div>


      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ESTO</span></strong>
      </div>
      <div class="credits">
         Developper par <br><a href="#">Driyef Hossin - Amine Fadil</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/typed.js/typed.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Main JS File -->
  <script src="js/main.js"></script>
  <script type="text/javascript">
    
    function deleteConfirm(delid)
    {
      console.log("hello");
      if(confirm("est que vous voulez vraiment suprimmer cet utilisateurs ?"))
        window.location.href="delet-User.php?codeF="+delid;
    }
    function EditForm(editid){

             document.getElementById('add_fn').style.display='none';
             document.getElementById('edit_fn').style.display='block';
           
    }
  </script>
  

</body>

</html>