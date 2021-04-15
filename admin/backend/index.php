<?php 

include("../database/dbconnection.php");

$message="";

if($_POST){

  $email = $_POST['email'];
  $password = $_POST['password'];

  $encryptancy = base64_encode($password);

  if(empty($email) || empty($encryptancy))
  {
       if($email == "")
        {
     	   
     	   $message = "Email is required.";
	       header("location:../index.php?message=$message");
        }

     if($encryptancy == "")
     {
     	    $message = "Password is required.";
	        header("location:../index.php?message=$message");
     }

  }
  else
  {

    $login = mysqli_query($conn,"select * from admin where email = '$email' and password ='$encryptancy'");

     if(mysqli_num_rows($login)==1)
         {
               header("location:../adminDashboard.php");
         }
     else
        {
           $message = "Either email or password is incorrect.";
            header("location:../index.php?message=$message");
        }

  }

}
 ?>