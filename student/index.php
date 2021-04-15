<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

      <meta name="description" content="">
      <meta name="author" content="">


      <title>Login</title>

      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <!-- <link href="css/login.css" rel="stylesheet"> -->

    <!-- Custom CSS-->
    <link href="../css/general.css" rel="stylesheet">

    <!-- Owl-Carousel -->
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/owl.theme.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <script src="../js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->

    <style type="text/css">
    .message
  {
    text-align: center;
    color:orange;
  }
    </style>

  </head>

  <body id = "home">

    <div class = "intro-header">
      <div class = "col-xs-12 text-center">
        <h1 class = "h1_home wow fadeIn" data-wow-delay = "0.4s">SMS</h1>
        <h3 class = "h3_home wow fadeIn" data-wow-delay = "0.6s">Scholarship Management System </h3>
    <h3 class = "h3_home wow fadeIn" data-wow-delay = "0.6s"> Student Log in </h3>

        <div class="login">
           <?php
                             
                             if(isset($_REQUEST['message']))

                            {
                             
                             $message = $_REQUEST['message'];

                          echo "<p class='message'>".$message."</p>";
                          //echo '<div class="alert alert-warning" role="alert">
                  //<i class="glyphicon glyphicon-exclamation-sign"></i>
                  //'.$message.'</div>';
            
                            }
                         ?>

          <form action="backend/index.php" method="POST" name="login">

            <input type="email" name="email" class ="h3_home wow fadeIn" data-wow-delay = "0.8s" placeholder="Email Address" required autofocus>

            <input type="password" name="password" class = "h3_home wow fadeIn" data-wow-delay = "1.0s" placeholder="Password" required="">

            <input type = "submit" value="Login" class = "btn btn-lg mybutton_standard wow swing wow fadeIn network-name text-center" data-wow-delay="1.2s">
            <h5 class = "h3_home wow fadeIn" data-wow-delay = "1.2s">Don't have an Account<a style="color:white" href="register.php">&nbsp;&nbsp;<u>Click Here</u></a></h5>
          </form>

          

        </div>
     </div>
    </div>


    <!-- JavaScript -->
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/owl.carousel.js"></script>
    <script src="../js/script.js"></script>
    <!-- StikyMenu -->
    <script src="../js/stickUp.min.js"></script>
    <script type="text/javascript">
      jQuery(function($) {
      $(document).ready( function() {
        $('.navbar-default').stickUp();

      });
      });

    </script>
    <!-- Smoothscroll -->
    <script type="text/javascript" src="../js/jquery.corner.js"></script>
    <script src="../js/wow.min.js"></script>
    <script>
     new WOW().init();
    </script>
    <script src="../js/classie.js"></script>
    <script src="../js/uiMorphingButton_inflow.js"></script>
    <!-- Magnific Popup core JS file -->
    <script src="../js/jquery.magnific-popup.js"></script>

  </body>
</html>
