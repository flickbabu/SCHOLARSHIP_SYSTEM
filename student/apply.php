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
.btn
  {
    margin-right: 350px !important;
    background: dodgerblue !important;
    border: none !important;

  }
</style>
</head>
<body>

<div class="col-md-4" style="background-color: black;">
<h2 id="sign">Student Panel</h2>
</div>

<div class="col-md-8" style="background-color: #f3f6fa ">
<h2> Scholarship Management System </h2>
</div>

<div class="row">
    <div class="col-sm-4" style="background-color:white;">
      <br>
      <br>
    <ul class="nav nav-pills nav-stacked">
    
          <li><a href="dashboard.php"> <i class="glyphicon glyphicon-list-alt"></i> DASHBOARD </a></li>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-film" aria-hidden="true" ></i> APPLICATIONS <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pending.php">PENDING APPLICATION </a></li>
          <li><a href="approve.php">ACCEPTED APPLICATION  </a></li>
          <li><a href="reject.php">REJECTED APPLICATION </a></li>
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

          <li class="active">SCHOLARSHIP APPLICATION FORM </li>
       </ol>

   
   <div class="panel panel-default">

    <div class="panel-heading">
        
    <div class="page-heading"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> Apply for Scholarships</div>
      
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

        

 <form class="form-horizontal" id="submitBrandForm" action="backend/apply.php" method="POST">
        
        <div class="modal-body">

           <div class="form-group">

             <?php 

        $email = $_SESSION['email'];


        $retrieve = mysqli_query($conn, "select * from student where email='$email' ");
        
        $row=mysqli_fetch_array($retrieve);
         ?>

            <label for="full" class="col-sm-3 control-label">Full Names</label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="text" class="form-control" id="full" value="<?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?>" name="full" autocomplete="off" readonly>
            </div>

          </div> <!-- /form-group-->

           <div class="form-group">

            <label for="contact" class="col-sm-3 control-label">Phone Number</label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="number" class="form-control" id="contact" placeholder="Enter Your Phone Number" name="contact" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group-->


          <div class="form-group">
            <label for="program" class="col-sm-3 control-label">Gender: </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
              <select class="form-control" id="brandStatus" name="program" required="">
                <option value="">~~ SELECT YOUR GENDER ~~</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div> <!-- /form-group-->  


           <div class="form-group">

            <label for="nation" class="col-sm-3 control-label">Nationality </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="text" class="form-control" id="nation" placeholder="Enter Your Nationality" name="nation" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group-->

           <div class="form-group">

            <label for="nationalid" class="col-sm-3 control-label">ID Number/Passport </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="number" class="form-control" id="passport" placeholder="Enter Your National ID or Passport Number" name="passport" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group-->
           <div class="form-group">

            <label for="address" class="col-sm-3 control-label">Address </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="text" class="form-control" id="address" placeholder="Enter Your Address" name="address" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group-->


           <div class="form-group">

            <label for="school" class="col-sm-3 control-label">Instutituion Name </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="text" class="form-control" id="school" placeholder="Enter Name of your Schoool" name="school" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group-->
          <div class="form-group">

            <label for="course" class="col-sm-3 control-label">Course </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="text" class="form-control" id="course" placeholder="Enter Course" name="course" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group-->        
          <div class="form-group">

            <label for="reg" class="col-sm-3 control-label">Registration Number </label>
            <label class="col-sm-1 control-label">: </label>
            <div class="col-sm-8">
             <input type="text" class="form-control" id="reg" placeholder="Enter Your Registration Number" name="reg" autocomplete="off" required="">
            </div>

          </div> <!-- /form-group--> 

          <?php 

        $email = $_SESSION['email'];


        $retrieve = mysqli_query($conn, "select * from student where email='$email' ");
        
        $row=mysqli_fetch_array($retrieve);
         ?>
           
       <div class="form-group">

            
            <div class="col-sm-8">
             <input type="text" class="form-control" id="student_id" value="<?php echo $row['student_id']; ?>" name="student_id" autocomplete="off" required="">
            </div>

        </div> <!-- /form-group-->  

        <?php 

                  $scholar_id = $_REQUEST['scholar_id'];


                  $retrieve = mysqli_query($conn, "select * from scholar where scholar_id='$scholar_id '"); 

                 $row=mysqli_fetch_array($retrieve);
             ?>   

        <div class="form-group">

            
            <div class="col-sm-8">
             <input type="text" class="form-control" id="scholar_id" value="<?php echo $row['scholar_id']; ?>" name="scholar_id" autocomplete="off" required="">
            </div>

        </div> <!-- /form-group-->               

        </div> <!-- /modal-body -->
        
        <div class="modal-footer">
     
          <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="Loading..." autocomplete="off"> Submit Form </button>
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