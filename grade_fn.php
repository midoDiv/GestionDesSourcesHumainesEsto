<?php 
 
//session_start();

 $con = mysqli_connect("localhost","root","","pfe");
  $query="select dateAmbauche,grade from fonctionnaire where codeF='".$_SESSION["id"]."'";
  $result = mysqli_query($con, $query);

  if ($row=mysqli_fetch_row($result)) {
     






 ?>
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
    b{
      color : #5B5D5D;
    }
    .badge{
      width: 90%
      height: 20%;
    }
    .gradepa{
           border-radius: 40px;
           background-color: purple;
           color: white;

           padding: 20px;
           margin: 10px;
           font-size: 25px;
    }
    .gradeph{
           border-radius: 40px;
           background-color: green;
           color: white;

           padding: 20px;
           margin: 10px;
           font-size: 25px;
    }
    .gradepes{
           border-radius: 40px;
           background-color: red;
           color: white;

           padding: 20px;
           margin: 10px;
           font-size: 25px;
    }

    .e8{
           border-radius: 40px;
           background-color: lightblue;
           color: white;

           padding: 20px;
           margin: 10px;
           font-size: 25px;
    }

    .e9{
           border-radius: 40px;
           background-color: purple;
           color: white;

           padding: 20px;
           margin: 10px;
           font-size: 25px;
    }

    .e10{
           border-radius: 40px;
           background-color: green;
           color: white;

           padding: 20px;
           margin: 10px;
           font-size: 25px;
    }

    .e11{
           border-radius: 40px;
           background-color: red;
           color: white;

           padding: 20px;
           margin: 10px;
           font-size: 25px;
    }
    .wth{
      color: white;
    }
  </style>
  <script type="text/javascript">
  	
        function affiche_rsla()
            {

              document.getElementById('search_a').style.display='block';
            }
            function affichea()
            {
              
              document.getElementById('search_a').style.display='none';
              document.getElementById('add_ad').style.display='block';
            }


  </script>
</head>
<body>




        

        <!-- Liste FNS -->
      <div class="row my-3 p-3" style="text-align: left;">
      <h5 style="color: gray;">GRADE : <b id="grade"><?php echo $row[1]; ?></b></h5>
      <div class="col-lg-12 progress my-0 p-0" style="background-color: lightgray; height: 50px; border-radius: 45px;">
              <div id="pb" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="8.33" aria-valuemin="0" aria-valuemax="100" style="width: 16.66%; border-radius: 45px;"><b id="year"style="color: white;font-size: 18px;">1ére années</b></div>
      </div>

        
      </div>









      <div class="row my-3 p-3" style="text-align: center;">
      <b style="font-size: 22px;">A propos des grade disponiples sur <i>L’Ecole Supérieure de Technologie - Oujda</i></b><br>
<div class="row  p-3" id="fn_to" style="text-align: center;">
      <div class="col-xl-12">

        <div class="e8">
          <b class="wth">ECHELLE 8 &nbsp;</b>
          <div id="sp1" class="spinner-border text-light" role="status" style=" float: right;">
                <span class="visually-hidden" id="paa"></span>
          </div>
        </div>
        
      </div>

      <div class="col-xl-12">

        <div class="e9">
          <b class="wth">ECHELLE 9 &nbsp;</b>
          <div id="sp2" class="spinner-border text-light" role="status" style=" float: right;display: none;">
                <span class="visually-hidden" id="paa"></span>
          </div>
        </div>
        
      </div>

      <div class="col-xl-12">

        <div class="e10">
          <b class="wth">ECHELLE 10</b>
          <div id="sp3" class="spinner-border text-light" role="status" style=" float: right;display: none;">
                <span class="visually-hidden" id="paa"></span>
          </div>
        </div>
        
      </div>

      <div class="col-xl-12">

        <div class="e11">
          <b class="wth">ECHELLE 11</b>
          <div id="sp4"class="spinner-border text-light" role="status" style=" float: right;display: none;">
                <span class="visually-hidden" id="paa"></span>
          </div>
        </div>
        
      </div>

</div>


<?php 

      $date_1 = new DateTime( $row[0] );
      $date_2 = new DateTime( date( 'Y-m-d' ) );
      $difference = $date_2->diff( $date_1 );

      

      if((string)$difference->y>=0)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='16.66%';
          document.getElementById('year').innerHTML='1ére année';
          document.getElementById('sp4').style.display='none';
          document.getElementById('sp1').style.display='block';
          document.getElementById('grade').innerHTML='échelle 8';

          
          </script>"+"<div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
  <div class='toast-header'>
    <img src='...' class='rounded me-2' alt='...'>
    <strong class='me-auto'>Bootstrap</strong>
    <small>11 mins ago</small>
    <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
  </div>
  <div class='toast-body'>
    Hello, world! This is a toast message.
  </div>
</div>";

          
          
           $query="update fonctionnaire set grade='"."échelle 8"."' where codeF='".$_SESSION["id"]."'";
         mysqli_query($con, $query);

      }
      if((string)$difference->y>=1)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='33.32%';
          document.getElementById('year').innerHTML='2éme année';
          
          </script>";

      }
      if((string)$difference->y>=2)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='49.98%';
          document.getElementById('year').innerHTML='3éme année';
          
          </script>";

      }
      if((string)$difference->y>=3)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='66.64%';
          document.getElementById('year').innerHTML='4éme année';
          
          </script>";

      }
      if((string)$difference->y>=4)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='83.3%';
          document.getElementById('year').innerHTML='5éme année';
          
          </script>";

      }
      if((string)$difference->y>=5)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='100%';
          document.getElementById('year').innerHTML='6éme année';
          
          </script>";

      }

      //??????????????????? KTAB HNA NORTIFICATION AWLD L9HBA 

       if((string)$difference->y>=6)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='16.66%';
          document.getElementById('year').innerHTML='1ére année';
          document.getElementById('sp1').style.display='none';
          document.getElementById('sp2').style.display='block';
          document.getElementById('grade').innerHTML='échelle 9';
          
          </script>";
           $query="update fonctionnaire set grade='"."échelle 9"."' where codeF='".$_SESSION["id"]."'";
         mysqli_query($con, $query);

      }
      if((string)$difference->y>=7)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='33.32%';
          document.getElementById('year').innerHTML='2éme année';
          
          </script>";

      }
      if((string)$difference->y>=8)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='49.98%';
          document.getElementById('year').innerHTML='3éme année';
          
          </script>";

      }
      if((string)$difference->y>=9)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='66.64%';
          document.getElementById('year').innerHTML='4éme année';
          
          </script>";

      }
      if((string)$difference->y>=10)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='83.3%';
          document.getElementById('year').innerHTML='5éme année';
          
          </script>";

      }
      if((string)$difference->y>=11)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='100%';
          document.getElementById('year').innerHTML='6éme année';
          
          </script>";

      }
      //??????????????????? KTAB HNA NORTIFICATION AWLD L9HBA 

       if((string)$difference->y>=12)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='16.66%';
          document.getElementById('year').innerHTML='1ére année';
          document.getElementById('sp2').style.display='none';
          document.getElementById('sp3').style.display='block';
          document.getElementById('grade').innerHTML='échelle 10';
          
          </script>";
           $query="update fonctionnaire set grade='"."échelle 10"."' where codeF='".$_SESSION["id"]."'";
         mysqli_query($con, $query);

      }
      if((string)$difference->y>=13)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='33.32%';
          document.getElementById('year').innerHTML='2éme année';
          
          </script>";

      }
      if((string)$difference->y>=14)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='49.98%';
          document.getElementById('year').innerHTML='3éme année';
          
          </script>";

      }
      if((string)$difference->y>=15)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='66.64%';
          document.getElementById('year').innerHTML='4éme année';
          
          </script>";

      }
      if((string)$difference->y>=16)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='83.3%';
          document.getElementById('year').innerHTML='5éme année';
          
          </script>";

      }
      if((string)$difference->y>=17)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='100%';
          document.getElementById('year').innerHTML='6éme année';
          
          </script>";

      }
      //??????????????????? KTAB HNA NORTIFICATION AWLD L9HBA 

       if((string)$difference->y>=18)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='16.66%';
          document.getElementById('year').innerHTML='1ére année';
          document.getElementById('sp3').style.display='none';
          document.getElementById('sp4').style.display='block';
          document.getElementById('grade').innerHTML='échelle 11';
          
          </script>";
           $query="update fonctionnaire set grade='"."échelle 11"."' where codeF='".$_SESSION["id"]."'";
         mysqli_query($con, $query);

      }
      if((string)$difference->y>=19)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='33.32%';
          document.getElementById('year').innerHTML='2éme année';
          
          </script>";

      }
      if((string)$difference->y>=20)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='49.98%';
          document.getElementById('year').innerHTML='3éme année';
          
          </script>";

      }
      if((string)$difference->y>=21)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='66.64%';
          document.getElementById('year').innerHTML='4éme année';
          
          </script>";

      }
      if((string)$difference->y>=22)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='83.3%';
          document.getElementById('year').innerHTML='5éme année';
          
          </script>";

      }
      if((string)$difference->y>=23)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='100%';
          document.getElementById('year').innerHTML='6éme année';
          
          </script>";

      }

           





           }



 ?>





        
</div>


</body>
</html>