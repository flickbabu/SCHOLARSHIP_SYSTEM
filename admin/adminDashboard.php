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

          <li class="active">SIGNATORY DETIALS</li>
       </ol>

   
   <div class="panel panel-default">

    <div class="panel-heading">
        
    <div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Signatory</div>
      
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
          <button class="btn btn-default button1" data-toggle="modal" data-target="#addBrandModel"> <i class="glyphicon glyphicon-plus-sign"></i> Add Signatory </button>
        </div> <!-- /div-action --> 

  <?php

            $retrieve = mysqli_query($conn, "select * from signatory where sign_del=3 "); 

            if(mysqli_num_rows($retrieve)==0)

               {
                    echo "<h3>No Signatory Registered yet</h3>";
                }
             
             else
                
               {

                 echo "<table class='table'> ";

                    echo "<tr>";

                        echo "<th>#</th>";
                        echo "<th>Full Name</th>";
                        echo "<th>Email</th>";
                        echo "<th>Contact</th>";
                        echo "<th>Organization</th>";
                        //echo "<th>Number of Applicants</th>";
                        echo "<th style='width:15%;'>Action</th>"; 

                    echo "</tr>";


                         $counter = 1;

                      while($row = mysqli_fetch_array($retrieve))

                            {
                                $signatory_id = $row['signatory_id'];

                     echo "<tr>";

                        echo "<td>" . $counter . "</td>";
                           $counter++;
                        echo "<td>".$row['first_name']." ".$row['middle_name']." ".$row['last_name']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['contact']."</td>";
                        echo "<td>".$row['org']."</td>";
                        echo "<td><div class='dropdown'>

                     <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>Action
                     <span class='caret'></span></button>

                     <ul class='dropdown-menu'>
                          <li><a href='editsign.php?signatory_id=$signatory_id'><i class='fa fa-edit'></i> Edit Signatory </a></li>
                      <li><a href='deletesign.php?signatory_id=$signatory_id' onclick=\"return confirm('Are you sure you want to delete this Signatory ?');\"><i class='glyphicon glyphicon-trash'></i> Remove Signatory</a></li>

                    </ul>

                      </div></td>";
                       
                    
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
      
      <form class="form-horizontal" id="submitBrandForm" action="backend/add.php" method="POST">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-plus"></i> Add Signatory</h4>
        </div>

      <div class="modal-body">
            
          <div class="form-group">
            
            <label for="firstName" class="col-sm-3 control-label">First Name</label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="firstName" placeholder="Signatory First Name" name="firstname" autocomplete="off" required="">
            </div>
          
          </div> <!-- /form-group--> 

          <div class="form-group">
            
            <label for="middleName" class="col-sm-3 control-label">Middle Name</label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="middleName" placeholder="Signatory Middle Name" name="middlename" autocomplete="off" required="">
            </div>
          
          </div> <!-- /form-group-->

          <div class="form-group">
            
            <label for="lastName" class="col-sm-3 control-label">Last Name</label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="lastName" placeholder="Signatory Last Name" name="lastname" autocomplete="off" required="">
            </div>
          
          </div> <!-- /form-group--> 
          <div class="form-group">
            
            <label for="contact" class="col-sm-3 control-label">Contact</label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="contact" placeholder="Signatory Contact" name="contact" autocomplete="off" required="">
            </div>
          
          </div> <!-- /form-group--> 

          <div class="form-group">
            
            <label for="email" class="col-sm-3 control-label">Email</label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="email" placeholder="Signatory Email" name="email" autocomplete="off" required="">
            </div>
          
          </div> <!-- /form-group--> 

          <div class="form-group">
            
            <label for="Password" class="col-sm-3 control-label">Password </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
              <input type="Password" class="form-control" id="Password" name="password" value="123456" autocomplete="off" required="" readonly="">
            </div>
          
          </div> <!-- /form-group--> 


          <div class="form-group">

            <label for="org" class="col-sm-3 control-label">Organisation </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="text" class="form-control" id="org" placeholder="Signatory Organisation " name="org" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group--> 
          <div class="form-group">
            
            <label for="Position" class="col-sm-3 control-label">Location</label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="position" placeholder="Signatory Position" name="location" autocomplete="off" required="">
            </div>
          
          </div> <!-- /form-group--> 

         <div class="form-group">
            <div class="col-sm-8">
              
           <?php 

              //retrive data

              $retrive = mysqli_query($conn,"select * from admin");

              $row=mysqli_fetch_array($retrive);

             ?>
         
          <input type="text" class="form-control" id="sign_id" value="<?php echo $row['admin_id']; ?>" name="admin_id" autocomplete="off">
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