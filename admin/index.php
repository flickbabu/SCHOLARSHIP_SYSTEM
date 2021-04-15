<!DOCTYPE html>

<html lang="en">

  <head>
      <title>Home</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="author" content="">


      <!-- bootstrap -->
  <link rel="stylesheet" href="../assests/bootstrap/css/bootstrap.min.css">
  <!-- bootstrap theme-->
  <link rel="stylesheet" href="../assests/bootstrap/css/bootstrap-theme.min.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="../assests/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="../assests/plugins/fileinput/css/fileinput.min.css">

  <script src="../assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="../assests/jquery-ui/jquery-ui.min.css">
  <script src="../assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
  <script src="../assests/bootstrap/js/bootstrap.min.js"></script>


      <!-- Bootstrap Core CSS -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/tempuserhome.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="../css/main.css" rel="stylesheet">
  <style type="text/css">
  .main
  {
    background: white;
  }
  .h3_home
  {
    width: 40% !important;
    margin-left: 400px !important;
  }
  h3
  {
    text-align: center;
  }
  .btn
  {
    margin-left: 520px !important;
    background: dodgerblue !important;
    border: none !important;

  }
  .message
  {
    text-align: center;
    color:orange;
  }
  </style>

  </head>

  <body class = "index">
    <div id = "page-wrapper">

      <!-- Header -->
        <header id = "header" class = "alt" style="background-color:#f3f6fa;color:black;height:4%">
          
          <nav id = "nav">
            <ul>
              <li class = "current"><a href = "#">Home</a></li>
               <li class = "submenu">
                <a href = "">Users Login</a>
                <ul>
                  <li><a href = "admin/index.php">Admin</a></li>
                  <li><a href = "signatory/index.php">Signatory</a></li>
                  <li><a href = "tempStudentShow.php">Students</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Contact Us</a>
              </li>
            </ul>
          </nav>
        </header>
        <!-- Banner -->
        <section class="main">

        <br>
        <br>
        <br>
        <br>
        <br>
        
        <form action="backend/index.php" method="POST" name="login">
            <h3><u>Admin Login</u></h3>
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
      
            <input type="email" name="email" class = "h3_home wow fadeIn" data-wow-delay = "0.8s" placeholder="Email Address"  autofocus><br>
            <input type="password" name="password" class = "h3_home wow fadeIn" data-wow-delay = "1.0s" placeholder="Password">
            <br>
            <input type ="submit" value="Login" class = "btn btn-lg mybutton_standard wow swing wow fadeIn network-name text-center" data-wow-delay="1.2s">
            
          </form>
        </section>

        


    </div>

    <!-- Scripts -->
      <script src="../js/jquery.min.js"></script>
      <script src="../js/jquery.dropotron.min.js"></script>
      <script src="../js/jquery.scrolly.min.js"></script>
      <script src="../js/jquery.scrollgress.min.js"></script>
      <script src="../js/skel.min.js"></script>
      <script src="../js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="../js/main.js"></script>

  </body>
</html>
