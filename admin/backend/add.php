<?php

include("../database/dbconnection.php");
$message = "";

if($_POST)
{
   $firstname= $_POST['firstname'];
   $middlename = $_POST['middlename'];
   $lastname = $_POST['lastname'];
   $contact= $_POST['contact'];
   $email = $_POST['email'];
   $password= $_POST['password'];
   $encrypt = base64_encode($password);
   $org = $_POST['org'];
   $location = $_POST['location'];
   $admin_id = $_POST['admin_id'];



//lets insert

$checkorg = mysqli_query($conn,"select * from signatory where org ='$org'");

if(mysqli_num_rows($check)==1)
{

         $message = "Organization already Exists";
         header("location:../adminDashboard.php?message=$message");
}
else
{

     
     $insert = mysqli_query($conn,"insert into signatory (first_name,middle_name,last_name,contact,email,password,org,location,admin_id) values ('$firstname','$middlename','$lastname','$contact','$email','$encrypt','$org','$location','$admin_id')");

      if($insert)
      
       {
 	       $message = "Signatory Added.";
	       header("location:../adminDashboard.php?message=$message");
       }
      else
      {
 	  
 	      $message = "Signatory Not Added.";
	      header("location:../adminDashboard.php?message=$message");
      }



}

} 
 ?>