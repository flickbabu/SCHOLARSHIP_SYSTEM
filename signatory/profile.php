<?php include("database/dbconnection.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title> Scholarship Management System</title>

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
<style type="text/css">
h2
{
  color: black;
}
#sign
{
  color: white;
}
.thumbnail-header
{
  float: left;
  width: 100%;
  text-align: center;
  color: white;
  background-color: dodgerblue;
  font-size: 25px;
  margin-bottom: 10px;
}
.book a{
  float: left;
  background: green;
  color: white;
  padding: 3px;
  border-radius: 3px;
  text-decoration: none;
  color: white;
}
.book a:hover{
  float: left;
  background: green;
  color: white;
  padding: 3px;
  border-radius: 3px;
  text-decoration: none;
  color: white;
}
 footer{
  float: left;
  width: 100%;
  padding: 1.5px;
  font-size: 18px;
  background: #f3f6fa;
  color: black;
  text-align: center;
  margin-top: 15px;
}
</style>
</head>
<body>

<div class="col-md-4" style="background-color: black;">
<h2 id="sign">Signatory Panel</h2>
</div>

<div class="col-md-8" style="background-color: #f3f6fa ">
<h2> Scholarship Management System </h2>
</div>

<div class="row">
    <div class="col-sm-4" style="background-color:white;">
      <br>
      <br>
       <ul class="nav nav-pills nav-stacked">
    
          <li><a href="signatoryDashboard.php"> <i class="glyphicon glyphicon-list-alt"></i> Dashboard  </a></li>
          <li><a href="profile.php"><i class="fa fa-users" aria-hidden="true"></i> My Profile </a></li>
          <li><a href="setting.php"> <i class="glyphicon glyphicon-wrench"></i> Setting</a></li> 
          <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> LogOut</a></li>
     </ul>




    </div>


    <div class="col-sm-8" style="background-color:lightgrey;">
      <br>
      <br>
       <ol class="breadcrumb">

          <li class="active">MY PROFILE </li>
       </ol>

   
   <div class="panel panel-default">

    <div class="panel-heading">
        
    <div class="page-heading"> <i class="fa fa-users" aria-hidden="true"></i> My Profile </div>
      
    </div> <!-- /panel-heading -->

      <div class="panel-body">

        <div class="messages">
         
            <?php
                             
                             if(isset($_REQUEST['message']))

                            {
                             
                             $message = $_REQUEST['message'];

                          //echo "<p class='message'>".$message."</p>";
                          echo '<div class="alert alert-warning" role="alert">
                  <i class="glyphicon glyphicon-exclamation-sign"></i>
                  '.$message.'</div>';
            
                            }
            ?>

        </div>

        

  <?php

       $email = $_SESSION['email']; 

      $retrieve = mysqli_query($conn, "select * from signatory where email='$email' "); 

            if(mysqli_num_rows($retrieve)==0)

                {
                  echo "<h3>No profile Available </h3>";
                }
             
             else
                
               {

                 echo "<table class='table'> ";

                    echo "<tr>";

                        echo "<th>#</th>";
                        echo "<th>Full Names</th>";
                        echo "<th>Contact</th>";
                        echo "<th>Email</th>";
                        echo "<th>Position</th>";
                        echo "<th>Organasation </th>";
                        //echo "<th style='width:15%;'>Action</th>"; 

                    echo "</tr>";


                         $counter = 1;

                      while($row = mysqli_fetch_array($retrieve))

                            {
                                $signatory_id = $row['signatory_id'];

                     echo "<tr>";

                          echo "<td>" . $counter . "</td>";
                          $counter++;
                           echo "<td>".$row['first_name']." ".$row['middle_name']." ".$row['last_name']."</td>";
                            echo "<td>".$row['contact']."</td>";
                           // echo "<td>".$row['branch_name']."</td>";
                            echo "<td>".$row['email']."</td>";
                            //echo "<td>".$row['address']."</td>";
                            echo "<td>".$row['location']."</td>";
                            echo "<td>".$row['org']."</td>";

                            
                      

                  echo "</tr>";

                          }
                              echo "</table>";
                          }

        ?>
    
        <!-- /table -->

      </div> <!-- /panel-body -->
   </div>
  </div><!--CLOSING OF COL-SM-8 --> 
</div> <!--CLOSING OF ROW-->

      
<footer>
  <p>Copyright &copy 2021 sms Developed by: JM </p>
</footer>
</body>
</html>