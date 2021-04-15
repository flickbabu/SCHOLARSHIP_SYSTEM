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

          <li class="active">Manage Password </li>
       </ol>

   
   <div class="panel panel-default">

    <div class="panel-heading">
        
    <div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Change Password</div>
      
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

        <form class="form-horizontal" id="submitBrandForm" action="backend/setting.php" method="POST">
        
        <div class="modal-body">


           <div class="form-group">

            <label for="password" class="col-sm-3 control-label">Enter Old Password </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="password" class="form-control" id="password" placeholder="Enter You Old Password" name="password" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group-->


           <div class="form-group">

            <label for="password" class="col-sm-3 control-label">Confirm Your Password </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="password" class="form-control" id="cpassword" placeholder="Confirm Your Password " name="cpassword" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group-->
          <div class="form-group">

            <label for="password" class="col-sm-3 control-label">Enter New Password </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="password" class="form-control" id="epassword" placeholder="Enter New Password" name="epassword" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group-->        
          <div class="form-group">

            <label for="password" class="col-sm-3 control-label">Confirm New Password </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="password" class="form-control" id="ecpassword" placeholder="Confirm Your New Password" name="ecpassword" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group--> 

          <?php 

        $email = $_SESSION['email'];


        $retrieve = mysqli_query($conn, "select * from signatory where email='$email' ");
        
        $row=mysqli_fetch_array($retrieve);
         ?>
           
       <div class="form-group">

            
            <div class="col-sm-8">
             <input type="hidden" class="form-control" id="email" value="<?php echo $row['email']; ?>" name="email" autocomplete="off" required="">
            </div>

        </div> <!-- /form-group-->                   

        </div> <!-- /modal-body -->
        
        <div class="modal-footer">
     
          <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="Loading..." autocomplete="off">Change Password </button>
        </div>
        <!-- /modal-footer -->
      </form>
       <!-- /.form -->

      </div> <!-- /panel-body -->
   </div>
  </div><!--CLOSING OF COL-SM-8 --> 
</div> <!--CLOSING OF ROW-->

      
<footer>
  <p>Copyright &copy 2021 sms Developed by: JM </p>
</footer>
</body>
</html>