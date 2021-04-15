<?php 

include("../database/dbconnection.php");
$message = "";

if($_POST)
{
   $full= $_POST['full'];
   $contact = $_POST['contact'];
   $program = $_POST['program'];
   $nation = $_POST['nation'];
   $passport= $_POST['passport'];
   $address= $_POST['address'];
   $school = $_POST['school'];
   $course= $_POST['course'];
   $reg= $_POST['reg'];
   $student_id = $_POST['student_id'];
   $scholar_id= $_POST['scholar_id'];


//lets insert

 $insert = mysqli_query($conn,"insert into application (full_name,phone_number,gender,nationality,id_number,address,school,course,reg_number,student_id,scholar_id) values ('$full','$contact','$program','$nation','$passport','$address','$school','$course','$reg','$student_id','$scholar_id')");


  if($insert)
      
       {
 	       $message = "Application Send Successfully .";
	       header("location:../studentdashboard.php?message=$message");
       }
      else
      {
 	  
 	      $message = "Application was Not send, try again Please !!.";
	      header("location:../studentdashboard.php?message=$message");
      }



}
 ?>