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
.bookr a{
  float: left;
  background: red;
  color: white;
  margin-left: 5px;
  padding: 3px;
  border-radius: 3px;
  text-decoration: none;
  color: white;
}
.bookr a:hover{
  float: left;
  background: red;
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
<h2 id="sign">Admin Panel</h2>
</div>

<div class="col-md-8" style="background-color: #f3f6fa ">
<h2> Scholarship Management System </h2>
</div>

<div class="row">
    <div class="col-sm-4" style="background-color:white;">
      <br>
      <br>
      <ul class="nav nav-pills nav-stacked">
    
          <li><a href="adminDashboard.php"> <i class="glyphicon glyphicon-list-alt"></i> DASHBOARD </a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-graduation-cap" aria-hidden="true" ></i> SCHOLARSHIP <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pending.php">PENDING SCHOLARSHIP </a></li>
          <li><a href="accepted.php">ACCEPTED SCHOLARSHIP </a></li>
          <li><a href="rejected.php">REJECTED SCHOLARSHIP </a></li>
        </ul>
      </li>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-film" aria-hidden="true" ></i> APPLICATIONS <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pendingapplication.php">PENDING APPLICATION </a></li>
          <li><a href="approved.php">ACCEPTED APPLICATION </a></li>
          <li><a href="appreject.php">REJECTED APPLICATION</a></li>
        </ul>
      </li>

      
          <li><a href="profile.php"><i class="fa fa-users" aria-hidden="true"></i> MY PROFILE </a></li>
          <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> LOGOUT</a></li>
     </ul>


    </div>


    <div class="col-sm-8" style="background-color:lightgrey;">
      <br>
      <br>
       <ol class="breadcrumb">

          <li class="active">PENDING SCHOLARSHIP DETIALS</li>
       </ol>

   
   <div class="panel panel-default">

    <div class="panel-heading">
        
    <div class="page-heading"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> Posted Scholarship</div>
      
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

            $retrieve = mysqli_query($conn, "select * from scholar where status='Pending'"); 

            if(mysqli_num_rows($retrieve)==0)

                {
                    echo "<h3>No Pending Scholarship</h3>";  
                }
             
             else
                
               {

                 echo "<table class='table'> ";

                    echo "<tr>";

                        echo "<th>#</th>";
                        echo "<th>Scholarship Name</th>";
                        echo "<th>Scholarship Location</th>";
                        echo "<th>Program</th>";
                        echo "<th>Deadline date</th>";
                        echo "<th>Number of Applicants</th>";
                        echo "<th style='width:15%;'>Action</th>"; 

                    echo "</tr>";


                         $counter = 1;

                      while($row = mysqli_fetch_array($retrieve))

                            {
                                $scholar_id = $row['scholar_id'];

                     echo "<tr>";

                            echo "<td>" . $counter . "</td>";
                             $counter++;
                            echo "<td>".$row['scholar_name']."</td>";
                            echo "<td>".$row['location']."</td>";
                            echo "<td>".$row['program']."</td>";
                            echo "<td>".$row['deadline']."</td>";
                            echo "<td>".$row['total_student']."</td>";
                      echo "<td><div class='book'><a href='approve.php?scholar_id=$scholar_id'>Approve</a></div>

                      <div class='bookr'><a href='reject.php?scholar_id=$scholar_id'>Reject </a></div>


                      </td>";
                      

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