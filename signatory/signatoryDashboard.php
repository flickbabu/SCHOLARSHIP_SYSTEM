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
.Pending{
  float: left;
  background: green;
  color: white;
  padding: 3px;
  border-radius: 3px;
  text-decoration: none;
  color: white;
}
.Approved{
  float: left;
  background: red;
  color: white;
  padding: 3px;
  border-radius: 3px;
  text-decoration: none;
  color: white;
}
.Rejected{
  float: left;
  background: black;
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

          <li class="active">SCHOLARSHIP DETIALS</li>
       </ol>

   
   <div class="panel panel-default">

    <div class="panel-heading">
        
    <div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Scholarship</div>
      
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

        <div class="div-action pull pull-right" style="padding-bottom:20px;">
          <button class="btn btn-default button1" data-toggle="modal" data-target="#addBrandModel"> <i class="glyphicon glyphicon-plus-sign"></i> Add Scholarship </button>
        </div> <!-- /div-action --> 
   
  <?php

            //$retrieve = mysqli_query($conn, "select * from branch "); 
   $email = $_SESSION['email'];

  $retrieve = mysqli_query($conn, "select * from signatory join scholar on signatory.signatory_id=scholar.signatory_id where email='$email'"); 

            if(mysqli_num_rows($retrieve)==0)

                {
                    echo "<h3>No Scholarship Available</h3>";
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
                        echo "<th style='width:15%;'>Status</th>"; 

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
                            echo "<td><div class='".$row['status']."'>".$row['status']."</div></td>";
                      
                      //echo "<td><div class='book'><a href='branchedit.php?branch_id=$branch_id'>Edit Branch </a></div></td>";
                      

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

<div class="modal fade" id="addBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <form class="form-horizontal" id="submitBrandForm" action="backend/scholar.php" method="POST">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-plus"></i> Add Scholarship</h4>
        </div>

      <div class="modal-body">
            
          <div class="form-group">
            
            <label for="ScholarshipName" class="col-sm-3 control-label">Scholarship Name</label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="sName" placeholder="Scholarship Name" name="sname" autocomplete="off" required="">
            </div>
          
          </div> <!-- /form-group--> 


          <div class="form-group">

            <label for="location" class="col-sm-3 control-label">Scholarship Location </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="text" class="form-control" id="location" placeholder="Scholarship Location" name="location" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group--> 
           <div class="form-group">
            <label for="program" class="col-sm-3 control-label">Program: </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
              <select class="form-control" id="brandStatus" name="program" required="">
                <option value="">~~ SELECT PROGRAM ~~</option>
                <option value="Degree">Degree</option>
                <option value="Diploma">Diploma</option>
                <option value="Certificate">Certificate</option>
              </select>
            </div>
          </div> <!-- /form-group-->  

          <div class="form-group">

            <label for="student" class="col-sm-3 control-label">Required Student</label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="number" class="form-control" id="student" placeholder="Maximum Number of student required" name="student" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group-->
          <div class="form-group">

            <label for="deadline" class="col-sm-3 control-label">DeadLine</label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="date" class="form-control" id="student" name="deadline" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group-->
         <div class="form-group">
            <div class="col-sm-8">
              
                 <?php

                    $email = $_SESSION['email'];

                   $retrive = mysqli_query($conn,"select * from signatory where email= '$email'");
                  $row=mysqli_fetch_array($retrive);
                ?>
          
          <input type="text" class="form-control" id="sign_id" value="<?php echo $row['signatory_id']; ?>" name="admin_id" autocomplete="off">
            </div>
          </div> <!-- /form-group-->                    

        </div> <!-- /modal-body -->
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
          <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="Loading..." autocomplete="off">Save Changes</button>
        </div>
        <!-- /modal-footer -->
      </form>
       <!-- /.form -->

    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<footer>
  <p>Copyright &copy 2021 sms Developed by: JM </p>
</footer>
</body>
</html>