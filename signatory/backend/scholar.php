<?php

include("../database/dbconnection.php");
$message = "";

if($_POST)
{
   $sname= $_POST['sname'];
   $location = $_POST['location'];
   $program = $_POST['program'];
   $student= $_POST['student'];
   $deadline = $_POST['deadline'];
   $sign_id = $_POST['admin_id'];


//lets insert

$checksname = mysqli_query($conn,"select * from scholar where scholar_name ='$sname'");

if(mysqli_num_rows($check)==1)
{

         $message = "Scholarship already Exists";
         header("location:../signatoryDashboard.php?message=$message");
}
else
{

     
     $insert = mysqli_query($conn,"insert into scholar(scholar_name,location,program,total_student,deadline,signatory_id) values ('$sname','$location','$program','$student','$deadline','$sign_id')");

      if($insert)
      
       {
 	       $message = "Scholarship Added.";
	       header("location:../signatoryDashboard.php?message=$message");
       }
      else
      {
 	  
 	      $message = "Scholarship Not Added.";
	      header("location:../signatoryDashboard.php?message=$message");
      }



}

} 
 ?>