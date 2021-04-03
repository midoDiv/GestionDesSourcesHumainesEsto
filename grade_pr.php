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
      <h5  style="color: gray;">GRADE : <b id="grade" ><?php echo $row[1]; ?></b></h5>
      <div  class="col-lg-12 progress my-0 p-0" style="background-color: lightgray; height: 50px; border-radius: 45px;">
              <div id="pb" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="8.33" aria-valuemin="0" aria-valuemax="100" style="width: 16.66%; border-radius: 45px;"><b id="year" style="color: white;font-size: 18px;">1ére années</b></div>
      </div>

        
      </div>









      <div class="row my-3 p-3" style="text-align: center;">
      <b style="font-size: 22px;">A propos des grade disponiples sur <i>L’Ecole Supérieure de Technologie - Oujda</i></b><br>
<div class="row  p-3" style="text-align: center;">
      <div class="col-xl-4">
        <div class="gradepa">
          <b class="wth">PA A</b>
          <div id="sp1"class="spinner-border text-light" role="status" style=" float: right;">
                <span class="visually-hidden" id="paa"></span>
          </div>
        </div>
        <div class="gradepa">
          <b class="wth">PA B</b>
          <div id="sp2" class="spinner-border text-light" role="status" style="display: none; float: right;">
                <span class="visually-hidden" id="pab"></span>
          </div>
        </div>
        <div class="gradepa">
          <b class="wth">PA C</b>
          <div id="sp3"class="spinner-border text-light" role="status" style="display: none; float: right;">
                <span class="visually-hidden" id="pac"></span>
          </div>
        </div>
        <div class="gradepa">
          <b class="wth">PA D</b>
          <div id="sp4"class="spinner-border text-light" role="status" style="display: none; float: right;">
                <span class="visually-hidden" id="pad"></span>
          </div>
        </div>
      </div>










      <div class="col-xl-4">
        <div class="gradeph">
          <b class="wth">PH A</b>
          <div id="sp5"class="spinner-border text-light" role="status" style="display: none; float: right;">
                <span class="visually-hidden" id="pha" ></span>
          </div>
        </div>
        <div class="gradeph">
          <b class="wth">PH B</b>
          <div id="sp6"class="spinner-border text-light" role="status" style="display: none; float: right;">
                <span class="visually-hidden" id="phb" ></span>
          </div>
        </div>
        <div class="gradeph">
          <b class="wth">PH C</b>
          <div id="sp7"class="spinner-border text-light" role="status" style="display: none; float: right;">
                <span class="visually-hidden" id="phc" ></span>
          </div>
        </div>
        <div class="gradeph">
          <b class="wth">PH D</b>
          <div id="sp8" class="spinner-border text-light" role="status" style="display: none; float: right;">
                <span class="visually-hidden" id="phd" ></span>
          </div>
        </div>
      </div>



      <div class="col-xl-4">
        <div class="gradepes">
          <b class="wth">PES A</b>
          <div id="sp9" class="spinner-border text-light" role="status"  style="display: none; float: right;">
                <span class="visually-hidden" id="pesa"></span>
          </div>
        </div>
        <div class="gradepes">
          <b class="wth">PES B</b>
          <div id="sp10"class="spinner-border text-light" role="status"  style="display: none; float: right;">
                <span class="visually-hidden" id="pesb"></span>
          </div>
        </div>
        <div class="gradepes">
          <b class="wth">PES C</b>
          <div id="sp11"class="spinner-border text-light" role="status"  style="display: none; float: right;">
                <span class="visually-hidden" id="pesc"></span>
          </div>
        </div>
        <div class="gradepes">
          <b class="wth">PES D</b>
          <div id="sp12"class="spinner-border text-light" role="status"  style="display: none; float: right;">
                <span class="visually-hidden" id="pesd"></span>
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
          document.getElementById('sp1').style.display='block';
          document.getElementById('year').innerHTML='1ére année';
          document.getElementById('grade').innerHTML='PA A';
          </script>";
           $query="update fonctionnaire set grade='"."PA A"."' where codeF='".$_SESSION["id"]."'";
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
            document.getElementById('grade').innerHTML='PA B';
             document.getElementById('sp1').style.display='none';
          document.getElementById('sp2').style.display='block';

        </script>";
         $query="update fonctionnaire set grade='"."PA B"."' where codeF='".$_SESSION["id"]."'";
        mysqli_query($con, $query);
      }

        
      if((string)$difference->y>=3)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='66.64%';
           document.getElementById('year').innerHTML='4éme année';
            document.getElementById('grade').innerHTML='PA C';
             document.getElementById('sp2').style.display='none';
          document.getElementById('sp3').style.display='block';

      </script>";
       $query="update fonctionnaire set grade='"."PA C"."' where codeF='".$_SESSION["id"]."'";
        mysqli_query($con, $query);
      }

        
      if((string)$difference->y>=4)
      {
        echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='83.3%';
           document.getElementById('year').innerHTML='5éme année';
            document.getElementById('grade').innerHTML='PA D';
             document.getElementById('sp3').style.display='none';
          document.getElementById('sp4').style.display='block';

      </script>";
         $query="update fonctionnaire set grade='"."PA D"."' where codeF='".$_SESSION["id"]."'";
        mysqli_query($con, $query);
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
          document.getElementById('sp4').style.display='none';
          document.getElementById('sp5').style.display='block';
          document.getElementById('year').innerHTML='1ére année';
          document.getElementById('grade').innerHTML='PH A';
          </script>";
           $query="update fonctionnaire set grade='"."PH A"."' where codeF='".$_SESSION["id"]."'";
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
            document.getElementById('grade').innerHTML='PH B';
             document.getElementById('sp5').style.display='none';
          document.getElementById('sp6').style.display='block';

        </script>";
         $query="update fonctionnaire set grade='"."PH B"."' where codeF='".$_SESSION["id"]."'";
        mysqli_query($con, $query);
      }
      if((string)$difference->y>=9)
      {
         echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='66.64%';
           document.getElementById('year').innerHTML='4éme année';
            document.getElementById('grade').innerHTML='PH C';
             document.getElementById('sp6').style.display='none';
          document.getElementById('sp7').style.display='block';

      </script>";
       $query="update fonctionnaire set grade='"."PH C"."' where codeF='".$_SESSION["id"]."'";
        mysqli_query($con, $query);
      }
      if((string)$difference->y>=10)
      {
        echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='83.3%';
           document.getElementById('year').innerHTML='5éme année';
            document.getElementById('grade').innerHTML='PH D';
             document.getElementById('sp7').style.display='none';
          document.getElementById('sp8').style.display='block';

      </script>";
         $query="update fonctionnaire set grade='"."PH D"."' where codeF='".$_SESSION["id"]."'";
        mysqli_query($con, $query);
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
          document.getElementById('sp8').style.display='none';
          document.getElementById('sp9').style.display='block';
          document.getElementById('year').innerHTML='1ére année';
          document.getElementById('grade').innerHTML='PES A';
          </script>";
           $query="update fonctionnaire set grade='"."PES A"."' where codeF='".$_SESSION["id"]."'";
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
            document.getElementById('grade').innerHTML='PES B';
             document.getElementById('sp9').style.display='none';
          document.getElementById('sp10').style.display='block';

        </script>";
         $query="update fonctionnaire set grade='"."PES B"."' where codeF='".$_SESSION["id"]."'";
        mysqli_query($con, $query);
      }
      if((string)$difference->y>=15)
      {
        echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='66.64%';
           document.getElementById('year').innerHTML='4éme année';
            document.getElementById('grade').innerHTML='PES C';
             document.getElementById('sp10').style.display='none';
          document.getElementById('sp11').style.display='block';

      </script>";
       $query="update fonctionnaire set grade='"."PES C"."' where codeF='".$_SESSION["id"]."'";
        mysqli_query($con, $query);
      }
      if((string)$difference->y>=16)
      {
        echo "<script type='text/javascript'>
          document.getElementById('pb').style.width='83.3%';
           document.getElementById('year').innerHTML='5éme année';
            document.getElementById('grade').innerHTML='PES D';
             document.getElementById('sp11').style.display='none';
          document.getElementById('sp12').style.display='block';

      </script>";
         $query="update fonctionnaire set grade='"."PES D"."' where codeF='".$_SESSION["id"]."'";
        mysqli_query($con, $query);
      }
      if((string)$difference->y>=17)
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